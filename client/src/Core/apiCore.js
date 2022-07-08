import {API} from "../config";

export const read = (pet_id) =>{
    return fetch(`${API}/pet_details/${pet_id}`, {
        method: "GET",
    })
    .then(response =>{
        return response.json();      
    })
    .catch(err =>{
        console.log(err);
    });
};

export const pageStatus = (pet_id) =>{
    return fetch(`${API}/page-status`, {
        method: "GET",
    })
    .then(response =>{
        return response.json();      
    })
    .catch(err =>{
        console.log(err);
    });
};

export const getAboutPage = () =>{
    return fetch(`${API}/getaboutpage`, {
        method: "GET",
    })
    .then(response =>{
        return response.json();
    })
    .catch(err =>{
        console.log(err);
    });
};

export const getVeterinarianPage = () =>{
    return fetch(`${API}/getventerinarin`, {
        method: "GET",
    })
    .then(response => {
        return response.json();
    })
    .catch(err=>{
        console.log(err);
    });
};

export const petInquiry =  (sendInquiry) =>{
    return fetch(`${API}/send_inquiry`, {
        method: "POST",
        headers:{
            Accept: 'application/json',
            "Content-Type": "application/json",
        },
        body: JSON.stringify(sendInquiry)
    })
    .then(response => {
        return response.json()
    })
    .catch(err =>{
        console.log(err)
    });
};

export const getBreedersPage = () =>{
    return fetch(`${API}/getbreeders`, {
        method: "GET",
    })
    .then(response => {
        return response.json();
    })
    .catch(err =>{
        console.log(err);
    });
};

export const getHealthwellnessPage = () =>{
    return fetch(`${API}/gethealthwellness`, {
        method: "GET",
    })
    .then(response => {
        return response.json();
    })
    .catch(err =>{
        console.log(err);
    });
};

export const getCommunityPage = () =>{
    return fetch(`${API}/getcommunity`, {
        method: "GET",
    })
    .then(response => {
        return response.json();
    })
    .catch(err =>{
        console.log(err);
    });
};

export const getFinancingPage = () =>{
    return fetch(`${API}/getfinancing`, {
        method: "GET",
    })
    .then(response => {
        return response.json();
    })
    .catch(err =>{
        console.log(err);
    });
};


export const getFilteredPets = (genders,locations,collection) => {
    
    return fetch(`${API}/pets?gender=${genders}&location=${locations}&breed=${collection}`, {
        method:"GET",
        headers:{
            Accept: 'application/json',
            "Content-Type":"application/json",
        },
        // body:JSON.stringify(data)
    })
    .then(response =>{
        console.log(response);
        return response.json();
    })
    .catch(err=>{
        console.log(err);
    });
};

export const sendMessage =  (contactMessage) =>{
    return fetch(`${API}/send_contact_info`, {
        method: "POST",
        headers:{
            Accept: 'application/json',
            "Content-Type": "application/json",
        },
        body: JSON.stringify(contactMessage)
    })
    .then(response => {
        return response.json()
    })
    .catch(err =>{
        console.log(err)
    });
};

export const petbylocation = () =>{
    return fetch(`${API}/petbylocation`, {
        method: "GET",
    })
    .then(response => {
        return response.json();
    })
    .catch(err=>{
        console.log(err);
    });
};

export const gettestimonials = () =>{
    return fetch(`${API}/testimonials`, {
        method: "GET",
    })
    .then(response => {
        return response.json();
    })
    .catch(err=>{
        console.log(err);
    });
}

export const getmymenu = () =>{
    return fetch(`${API}/mymenu`, {
        method: "GET",
    })
    .then(response => {

        return response.json();
    })
    .catch(err=>{
        console.log(err);
    });
}

export const getInstaToken = () =>{
    return fetch(`${API}/insta-token`, {
        method: "GET",
    })
    .then(response => {

        return response.json();
    })
    .catch(err=>{
        console.log(err);
    });
}

export const getScriptSetting = () =>{
    return fetch(`${API}/script-settings`, {
        method: "GET",
    })
    .then(response => {

        return response.json();
    })
    .catch(err=>{
        console.log(err);
    });
}