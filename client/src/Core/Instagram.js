import React, { useEffect, useState } from 'react';
import InstagramFeed  from 'react-ig-feed';
import 'react-ig-feed/dist/index.css';
import { getInstaToken } from "./apiCore";

const Instagram = () => {

    const [instaToken,setInstaToken] = useState([]);

    const loadInstaSetting = () => {
      getInstaToken().then((data) => {
          
          console.log(data);
          setInstaToken(data.data);
        
      });
    };

    useEffect(() => {
      loadInstaSetting();
    }, []);

    return (
      <div>
        <div className='instagram-section pt-5'>
          <div className='container-fluid'>
            <div className='row justify-content-center'>
              <div className='col-lg-7 col-md-10'>
                <div className='section_title text-center'>
                  <h3>Pet Stories</h3>
                  <h4>Follow us on Instagram <a href="https://www.instagram.com/safaristansnewhaven/" target="_blank">@safaristansnewhaven</a></h4>
                </div>
              </div>
            
              {instaToken.map((client, i) => (
                  <InstagramFeed token={client.token}  counter="6"/>
              ))}
            </div>
          </div>
        </div>
      </div>
    );
    
};

export default Instagram;