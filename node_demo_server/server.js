// JavaScript Document

var app = require('express')();
var http = require('http').Server(app);
var port = process.env.PORT || 3000;

// start the server

http.listen(port, function(){
  console.log('listening on port %d', port);
});

var _variables = {phone : false, rails : false, extern_service: false};

app.get('/', function(req, res){
  res.sendFile("/home/marco/294/index.html");
});

app.get('/set', function(req, res){
  console.log("Setting variable");
  var url = require('url');
  var url_parts = url.parse(req.url, true);
  var query = url_parts.query;
  _variables[query['name']] = true;
  res.send(_variables);

});
 
app.get('/get', function(req, res){

  res.send( _variables );
});
 
app.get('/reset', function(req, res){
  _variables = {phone : false, rails : false, extern_service: false};
});
 
