require 'net/http'
require 'json'

def add_simple_schemas(http)
  objects = {}

  response = http.send_request('GET', 'http://demo.wp-api.org/wp-json/?context=help')
  parsed_data = JSON.parse(response.body)

  parsed_data['routes'].each {
    |route|
    if not route[1].key?('schema')
      next
    end

    # make a readable route name from the route regex
    route_nicename = route[0].gsub(/\(\?P<(\w+?)>.*?\)/, '<\1>')

    # escape the <> as this value is only used in HTML
    route[1]['nicename'] = route_nicename.gsub( /</, '&lt;' ).gsub( />/, '&gt;' )

    # group the objects by unique schema titles [ post => ..., term => ..., etc ]
    if not objects.key?( route[1]['schema']['title'] )
      objects[ route[1]['schema']['title'] ] = {
        "name" => route[1]['schema']['title'], "routes" => { route_nicename => route[1] },
        "schema" => route[1]['schema']
      }
    else
        objects[ route[1]['schema']['title'] ]["routes"][ route_nicename ] = route[1]
    end
  }

  objects.each {
    |object|
    file = File.new('_data/' + object[0] + '.json', 'w')
    file.write(JSON.pretty_generate(object[1]))
  }
end

def add_terms_schema(http)
  response = http.send_request('OPTIONS', 'http://demo.wp-api.org/wp-json/wp/v2/terms/category')
  file = File.new('_data/terms.json', 'w')
  parsed_data = JSON.parse(response.body)
  # puts data
  file.write(JSON.pretty_generate(parsed_data))
end

res = Net::HTTP.start("demo.wp-api.org", 80) {
  |http|
  add_simple_schemas(http)
  #add_terms_schema(http)
}
