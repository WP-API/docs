# API Docs

This repo contains the source for [documentation for the API](https://developer.wordpress.org/rest-api/) on developer.wordpress.org (DevHub).

## Adding/Removing Files

When creating new files, these must be added to the manifest. Run `bin/generate-manifest.php` to update this.

Removing files also requires regenerating the manifest. After deletion and sync with DevHub, the page also needs to be manually deleted from DevHub.

## Refreshing the Templated API Reference

The reference section is created by parsing the output of a site's schema as retrieved from that site's REST API index route. The current method used to generate this approach is as follows:

- Create a local WordPress environment (always use the current or Release Candidate version of WordPress) using the local environment tool of your choice.
- Edit `/etc/hosts` to map the domain `example.com` to the IP of that WordPress instance, and ensure the site is configured to run at `example.com`.
- Run `composer install` in this project's root directory to install dependencies. 
- Run `bin/regenerate.php` in this project's root directory to run the asset regeneration script.
- Use `git status` and `git diff` to validate that the files were updated as expected.
