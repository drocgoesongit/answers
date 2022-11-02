function Card(props) {
    return(
        <div>
            <h2>{props.name}</h2>
            <img src={props.img} alt={props.name} />
            <p>{props.contry}</p>
            <p>{props.club}</p>
            <span>{props.pos}</span>
            <br />
        </div>
    )
}
export default Card;