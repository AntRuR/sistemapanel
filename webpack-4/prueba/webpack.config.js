const path = require('path');

module.exports = {
    entry: {
        app: path.resolve(__dirname,'src/js/app.js')
    },
    mode:'development',
    output:{
        path: path.resolve(__dirname,'dist'),
        filename:'js/[name].js'
    }
}
