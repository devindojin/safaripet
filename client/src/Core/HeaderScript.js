import React, { useEffect, useState } from 'react';
import { getScriptSetting } from "./apiCore";
import {Helmet} from "react-helmet";

const HeaderScript = () => {

    const [headerscript,setHeaderScript] = useState([]);

    const headerScript = () => {
      getScriptSetting().then((data) => {
          
          console.log(data);
          setHeaderScript(data.data);
        
      });
    };

    useEffect(() => {
      headerScript();
    }, []);

    function createMarkup(data) {
        return {__html: data };
      }

    return (
     
        <Helmet>
           {headerscript.map((client, i) => (
        <div  dangerouslySetInnerHTML={createMarkup(client.header_display)}  />
        ))}
        </Helmet>
     
      
      // <div>
      //   {headerscript.map((client, i) => (

      //       <div>{client.header_display} </div>
      //   ))}
      // </div>
    );
    
};

export default HeaderScript;