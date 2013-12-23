module.exports = function(grunt) {

   'use strict';

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    settings: {
        // Configurable paths
        dir: {
            src: 'themes/ctrl/',
            dist: 'themes/ctrl/'
        }
    },

    jshint: {
      all: ['*.js']
    },

    uglify: {

      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      my_target: {
        files: {
          '<%= settings.dir.src %>js/<%= pkg.name %>.min.js': ['<%= settings.dir.src %>js/<%= pkg.name %>.js'],
          '<%= settings.dir.src %>js/plugins.min.js': ['<%= settings.dir.src %>js/plugins.js']
        }
      }
    },

    less: {
      options: {
        cleancss: true,
        compress: true,
        dumpLineNumbers: 'all',
        report: 'min'
      },
      files: {
        "<%= settings.dir.src %>style.css": "<%= settings.dir.src %>style.less"
      }
    },

    imagemin: {                          // Task
      static: {                          // Target
        options: {                       // Target options
          optimizationLevel: 3
        },
        files: {                         // Dictionary of files
          //'<%= settings.dir.src %>images/*.png': '<%= settings.dir.src %>images/*.png', // 'destination': 'source'
          //'<%= settings.dir.src %>images/*.jpg': '<%= settings.dir.src %>images/*.jpg',
          //'<%= settings.dir.src %>images/*.gif': '<%= settings.dir.src %>images/*.gif'
        }
      },
      dynamic: {                         // Another target
        files: [{
          expand: true,                  // Enable dynamic expansion
          cwd: '<%= settings.dir.src %>images/',                   // Src matches are relative to this path
          src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
          dest: '<%= settings.dir.src %>images/'    // Destination path prefix
        }]
      }
    },

    connect: {
        options: {
            hostname: 'localhost',  // → Change this to '0.0.0.0' if
                                    // the server needs to be access
                                    // from outside of the LAN
            livereload: 35729,
            port: 8888              // → 8080 is used as it is the official
                                    // alternate to port 80 (default port
                                    // for HTTP), and it doesn't require
                                    // root access:
                                    // http://en.wikipedia.org/wiki/List_of_TCP_and_UDP_port_numbers
        },
        livereload: {
            options: {
                base: '../',

                // Automatically open the webpage in the default browser
                open: true
            }
        },
    },

    watch: {
        files: '<%= settings.dir.src %>/**',
        less: {
          // We watch and compile less files as normal but don't live reload here
          files: ['src/less/*.less'],
          tasks: ['less'],
        },
        options: {
            livereload: '<%= connect.options.livereload %>'
        },
        scripts: {
            files: ['<%= settings.dir.src %>/js/*.js', 'css/**/*.scss' ],
            tasks: 'default',
            options: {
                spawn: false,
            }
        }
    }
  });

  // Load Grunt tasks automatically
  require('load-grunt-tasks')(grunt, { scope: 'devDependencies' });

  // Default task(s).
  grunt.registerTask('default', ['jshint','uglify','less','imagemin']);

  // development task
  grunt.registerTask('dev', [
      'connect:livereload',
      'watch'
  ]);
};