module.exports = function(grunt) {
 
    // Project configuration.
    grunt.initConfig({
 
        //Read the package.json (optional)
        pkg: grunt.file.readJSON('package.json'),
 
        // Task configuration.
        sass: {
            dist: {
                files: {
                   'style.css': 'scss/style.scss',
                   'portfolio.css': 'scss/portfolio/portfolio.scss'
                }
            }
        },
        autoprefixer: {
            dist: {
                files: {
                    'style.css': 'style.css',
                     'portfolio.css': 'portfolio.css'   
                }
            }
        },

        watch: {
            scripts: {
                files: [
                    'scss/*.scss',
                    'scss/portfolio/*.scss'


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