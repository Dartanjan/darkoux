module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      dist: {
        src: ['sass/*.scss'],
        dest: 'sass/build.scss'
      }
    },

    sass: {
      dist: {
        files: {
          'style.css': 'sass/main.scss'
        }
      }
    },

    watch: {
      sass: {
        files: ['sass/*.scss'],
        tasks: ['concat', 'sass']
      }
    }

  });

  // Load the plugin that provides the "uglify" task.
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');

  // Default task(s).
  grunt.registerTask('dev', ['sass']);

};