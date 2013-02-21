module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

      // FTP deployment
      'ftp-deploy': {
        build: {
          auth: {
            host: 'server.com',
            port: 21,
            authKey: 'hlm'
          },
          src: 'sites/',
          dest: 'sites/'
          //exclusions: ['/path/to/source/folder/**/.DS_Store', '/path/to/source/folder/**/Thumbs.db', 'dist/tmp']
        }
      }

  });

  // Load FTP packages
  grunt.loadNpmTasks('grunt-ftp-deploy');

  // Default task.
  grunt.registerTask('default', 'ftp-deploy');

};