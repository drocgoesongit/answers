const express=require("express")
const homeroute=require("./routes/home.js")
const loginroute=require("./routes/login.js")
const aboutroute=require("./routes/about.js")
const bodyParser = require('body-parser');

const app = express();

app.use(bodyParser.json());
  

app.get('/',(req,res) =>{
    res.send("Welcome to Routing Page");

});

app.get("/home",homeroute)
app.get("/login",loginroute)
app.get("/about",aboutroute)

app.listen((5000),()=>{
    console.log("Server is Running")
})

