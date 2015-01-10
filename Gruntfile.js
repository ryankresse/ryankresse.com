module.exports = function(grunt) {
 
    // Project configuration.
    grunt.initConfig({
 
        //Read the package.json (optional)
        pkg: grunt.file.readJSON('package.json'),
 
        // Task configuration.
        sass: {
            dist: {
                files: {
                   'style.css': 'scss/style.scss'
                }
            }
        },
        autoprefixer: {
            dist: {
                files: {
                    'style.css': 'style.css'  
                }
            }
        },

        watch: {
            scripts: {
                files: [
                    'scss/*.scss'

                ],
                tasks: ['sass', 'autoprefixer']
            }
        }
       
    });
 
    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    // Default task.
    grunt.registerTask('default', ['sass', 'autoprefixer']);
 
};