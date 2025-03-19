# sellx - Bootstrap 5TYPE Template based on NOVA and Bootstrap 5.3

This is a prototype template based on NOVA and Bootstrap 5.3. It is intended to be used as a starting point for new
projects. Individual themes should remain in feature branches, and the master branch must be kept in sync with NOVA.
No changes should be made in the Master branch, except for the SCSS and JS files that are necessary to make things work.

## Releases

The Master branch should be kept in its original state. The releases are based on feature branches and marked with
tags that follow semantic versioning.
Each feature branch is based on the Master and can be:
- An individual implementation of the template
- A new standard theme or custom theme for some client
- Development of new features that later may be merged into the feature branches

- 1.0.0: Initial release based on NOVA 1.3.1 and Bootstrap 5.3.3

## Sync with NOVA

The Master branch holds the original NOVA files and has only SCSS and JS files modified in order to make BS5 work.

1. Update NOVA files inside the NOVA directory
2. Inside the sellx - Bootstrap 5 directory, create a new branch based on Master
3. Copy the files from NOVA to sellx - Bootstrap 5
4. Push the changes to the new branch and create a merge request to Master
5. Once the master is updated, pull the changes into the desired feature branches


## Update Bootstrap version

1. Create a new branch based on Master inside sellx - Bootstrap 5
2. Update the bootstrap.js and bootstrap.bundle.js files
3. Update the scss files inside themes/bootstrap. Be careful, as the boostrap.scss has some commented lines preventing
files to be compiled.
4. The file watcher should compile the new css files, that are shipped with the template to the clients.
