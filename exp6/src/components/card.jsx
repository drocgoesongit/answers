import React from 'react';

function Card(props) {
    return(
        <div>
            <h2>{props.name}</h2>
            <img src={props.img} alt={props.name} height="250" width="400"/>
            <p>{props.country}</p>
            <p>{props.club}</p>
            <span>{props.pos}</span>
            <br />
        </div>
    )
}
export default Card;