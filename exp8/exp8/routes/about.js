// Importing express module
const express=require("express")
const router=(req,res,next)=>{
	res.send("This is the About request")
}

// Importing the router
module.exports=router