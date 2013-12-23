module.exports = function(grunt) {

    'use strict';

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        jshint: {
          all: ['*.js']
        },

        uglify: {

          options: {
            banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
          },
          js: {
            files: {
              'js/functions.min.js': ['js/functions.js'],
              'js/plugins.min.js': ['js/plugins.js']
            }
          }
        },

        imagemin: {                          // Task
          static: {                          // Target
            options: {                       // Target options
              optimizationLevel: 3
            },
            files: {                         // Dictionary of files
              //'images/*.png': 'images/*.png', // 'destination': 'source'
              //'images/*.jpg': 'images/*.jpg',
              //'images/*.gif': 'images/*.gif'
            }
          },
          dynamic: {                         // Another target
            files: [{
              expand: true,                  // Enable dynamic expansion
              cwd: 'images/',                   // Src matches are relative to this path
              src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
              dest: 'images/'    // Destination path prefix
            }]
          }
        },

        // running `grunt less` will compile once
        less: {
            development: {
                options: {
                    yuicompress: true,
                    cleancss: true,
                    compress: true,
                    dumpLineNumbers: 'all',
                    report: 'min'
                },
                files: {
                    "style.css": "style.less"
                }
            }
        },
        // running `grunt watch` will watch for changes
        watch: {
            css: {
                files: "*.less",
                tasks: ["less"]
            },
            js: {
                files: "js/*.js",
                tasks: ["uglify"]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    //Watch
    grunt.registerTask('dev', [ 'watch' ]);

};
