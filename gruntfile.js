module.exports = function (grunt) {

    grunt.initConfig({

         watch: {
            files: ['css/**/*.scss'],
            tasks: ['sass'],
        },

        browserSync: {
            bsFiles: {
                src : [
                        'scripts/*.js',
                        'css/*.css',
                        'index.html'
                    ]
            },
            options: {
                watchTask: true,
                server: {
                    baseDir: "./"
                }
            }
        },

        uglify: {
 
            js: {
                files: {
                    'scripts/main.min.js': ['scripts/main.js']
                },
                options: {
                    compress: true
                }
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed',
                },
                files: {
                    'css/main.min.css': 'css/main.scss',
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    grunt.registerTask('default', ['uglify', 'sass', 'browserSync', 'watch']);

};