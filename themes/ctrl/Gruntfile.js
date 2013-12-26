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
            options:{
                livereload: true
            },
            css: {
                files: "*.less",
                tasks: ["less"]
            },
            js: {
                files: "js/*.js",
                tasks: ["uglify"]
            }
        },
        express:{
            all:{
                options:{
                    port: 8888,
                    hostname: 'localhost',
                    base: ['.'],
                    livereload: true
                }
            }
        }
    });

    // Load Grunt tasks automatically
    require('load-grunt-tasks')(grunt, { scope: 'devDependencies' });

    // Default task(s).
    grunt.registerTask('default', ['jshint','uglify','less','imagemin']);
    //Watch
    grunt.registerTask('dev', [ 'watch' ]);

    //Serer
    grunt.registerTask('server', [ 'express', 'watch' ]);

};
