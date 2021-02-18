import React,{useState,useEffect} from 'react';
import axios from 'axios';

import "./WatchDetails.scss";

const WatchDetails=({id})=>{
    const [item,setItem]=useState([]);

    useEffect(()=>{
        axios.get(`/api/watch/${id}`)
        .then(res=>setItem(res.data))
        .catch(err=>console.log(err));
    },[]);
    return(
        <div className="container">
            {item.map(watch=>{
                return(
                    <div className="container watch-details" key={watch.id}>
                        <h3>{watch.title}</h3>
                        <img src={`../img/${watch.img}`} alt="watch-image"/>
                        <p className="lead">{watch.description}</p>
                        <p>{watch.text}</p>
                        <p className="font-weight-bold">${watch.price}</p>
                    </div>
                );
            })}
        </div>
    );
}

export default WatchDetails;