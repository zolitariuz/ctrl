module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    jshint: {
      all: ['*.js']
    },

    uglify: {

      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      my_target: {
        files: {
          'themes/ctrl/js/<%= pkg.name %>.min.js': ['themes/ctrl/js/<%= pkg.name %>.js'],
          'themes/ctrl/js/plugins.min.js': ['themes/ctrl/js/plugins.js']
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
        "themes/ctrl/style.css": "themes/ctrl/style.less"
      }
    },

    imagemin: {                          // Task
      static: {                          // Target
        options: {                       // Target options
          optimizationLevel: 3
        },
        files: {                         // Dictionary of files
          //'themes/ctrl/images/*.png': 'themes/ctrl/images/*.png', // 'destination': 'source'
          //'themes/ctrl/images/*.jpg': 'themes/ctrl/images/*.jpg',
          //'themes/ctrl/images/*.gif': 'themes/ctrl/images/*.gif'
        }
      },
      dynamic: {                         // Another target
        files: [{
          expand: true,                  // Enable dynamic expansion
          cwd: 'themes/ctrl/images/',                   // Src matches are relative to this path
          src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
          dest: 'themes/ctrl/images/'    // Destination path prefix
        }]
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // LESS
  grunt.loadNpmTasks('grunt-contrib-less');

  // JS Hint
  grunt.loadNpmTasks('grunt-contrib-jshint');

  //Optimize Images
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Default task(s).
  grunt.registerTask('default', ['jshint','uglify','less','imagemin']);

};