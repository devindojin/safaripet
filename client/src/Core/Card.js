import React, {useState, useEffect}  from 'react';
import {Link} from 'react-router-dom';
import {PUPPIEIMG} from "../config";
import moment from 'moment';


const Card = ({pet}) => {


    return (
      <div>
        <div className="listing-block">
          <div className="listing-image">
            <img
              src={
                PUPPIEIMG +
                pet.pet_id +
                "/image-" +
                pet.pet_image_file_ids +
                "-253X280.jpeg"
              }
              alt={pet.pbrd_display_name}
              onError={(e) => {
                e.target.src = "/img/just-arrived.jpg"; // some replacement image
              }}
            />
            {/*<div className="tag">{pet.pstatus_name}</div>*/}
          </div>
          <div className="listing-content">
            <h3>{pet.pbrd_display_name}</h3>
            <h4>Location: {pet.loc_addr_city}</h4>
            <h4>Age: {pet.pet_age}</h4>
            <h4>Gender: {pet.pet_gender}</h4>
            {/* <Link to={`/puppies-for-sale/${pet.pet_id}`} className="boxed-btn3">
              View Puppy
            </Link> */}
            <Link
              to={`/puppies-for-sale/${pet.pbrd_display_name
                .toLowerCase()
                .replace(/ /g, "-")
                .replace(/\//g, "-")}-${pet.pet_id}`}
              className="boxed-btn3"
            >
              View Puppy
            </Link>
          </div>
        </div>
      </div>
    );
}
export default Card;