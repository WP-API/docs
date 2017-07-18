# API Docs

This repo contains the source for [documentation for the API](https://developer.wordpress.org/rest-api/) on developer.wordpress.org (DevHub).

## Adding/Removing Files

When creating new files, these must be added to the manifest. Run `bin/generate-manifest.php` to update this.

Removing files also requires regenerating the manifest. After deletion and sync with DevHub, the page also needs to be manually deleted from DevHub.
