module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      build: {
        files: {
          'theme/assets/css/ff3l.css': 'theme/assets/css/ff3l.less'
        }
      },
    },
    cssmin: {
      css: {
        files: {
          'theme/assets/css/ff3l.min.css': ['theme/assets/css/ff3l.css']
        }
      }
    },
    phplint: {
      theme: ['theme/*.php']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks("grunt-phplint");

  grunt.registerTask('default', ['less', 'cssmin', 'phplint']);
};
