import React from 'react';
import { useState } from "react";

function Cart() {
    const[total,setTotal]=useState();
    const[img,setImg]=useState(
        "https://tse2.mm.bing.net/th?id=OIP.yHrP1XP9nGoetObf102rvwHaFE&pid=Api&P=0"
    );
    const[rate,setRate]=useState();
    const[alt,setAlt]=useState("none");

     const showImg=(src)=> {
        setAlt(src);
        if (src==="iphone") {
            setImg(
                "https://tse1.mm.bing.net/th?id=OIP.VY1_avauUv_umemnNQyHeQHaHa&pid=Api&P=0"
            );
            setRate(100000);
            
        }
        else if (src==="samsung") {
            setImg(
                "https://tse4.mm.bing.net/th?id=OIP.kKa3R4sM1vByr7LAI9d88AHaHa&pid=Api&P=0"
            );
            setRate(80000);
            
        }else if (src==="oppo") {
            setImg(
                "https://tse3.mm.bing.net/th?id=OIP.m6qAer5XiSfRKKUKefSJBAHaHa&pid=Api&P=0"
            );
            setRate(30000);
            
        }else if (src==="vivo") {
            setImg(
                "https://tse1.mm.bing.net/th?id=OIP.kbl5OEj2PWXYtSoGiyQEIgHaHd&pid=Api&P=0"
            );
            setRate(25000);
            
        }
         else {
            setImg(
                "https://tse2.mm.bing.net/th?id=OIP.yHrP1XP9nGoetObf102rvwHaFE&pid=Api&P=0"
            );
            setRate(0);
            
        }
        
    }

    const clickHandler=() =>{
        let a,b,c;
        a=parseInt(document.getElementById("qty").value);
        b=rate;
        c=a*b;
        setTotal(c);
    }

    return(
        <div>
            <p>
            <label htmlFor="">Select the phone: </label>
            <select name="phone" id="phone" onChange={(e)=>{showImg(e.target.value)}}>
                <option value="none">none</option>
                <option value="iphone">iphone</option>
                <option value="samsung">samsung</option>
                <option value="oppo">oppo</option>
                <option value="vivo">vivo</option>
            </select>
            </p>
            <p>
                <img src={img} alt={alt} height="200px" width="200px"/>
            </p>
            <p>
                <label htmlFor="">Enter Quantity: </label>
                <input type="text" name="" id="qty" />
            </p>
            <p>
                <label htmlFor="">Rate of Product: </label>
                <input type="text" name="" id="rate" value={rate}/>
            </p><p>
                <label htmlFor="">Total Bill: </label>
                <input type="text" name="" id="total" value={total}/>
            </p>
            <button onClick={clickHandler}>Calculate Total</button>
            
            
        </div>
    )


    
}
export default Cart;