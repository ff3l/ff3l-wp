module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      build: {
        files: {
          'assets/css/main.css': 'assets/css/main.less'
        }
      },
    },
    cssmin: {
      css: {
        files: {
          'assets/css/main.min.css': ['assets/css/main.css']
        }
      }
    },
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['less', 'cssmin']);
};
