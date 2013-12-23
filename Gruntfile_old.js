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
      js: {
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
      style: {
        files: {
          "<%= settings.dir.src %>style.css": "<%= settings.dir.src %>style.less"
        }
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

    watch: {
      js: {
        files: ['javascript/*.js'],
        tasks: ['uglify:js'],
        options: {
          livereload: true,
        }
      },
      css: {
        files: ['less/*.less'],
        tasks: ['less:style'],
        options: {
          livereload: true,
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

};