var mongoose = require('mongoose');
var messagesScheme = mongoose.Schema({
    uid: Number,
    name: String,
    msg: String,
    channel: String,
    updated_at: Date,
    created_at: String
});

module.exports = mongoose.model('Messages', messagesScheme);