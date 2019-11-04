
export const vendor_dir = 'js/babel/vendor';

export const loadCss =  (urlcss) => {
    let newCSS = document.createElement("link");
    newCSS.type = "text/css";
    newCSS.rel = "stylesheet";
    newCSS.href = encodeURI(urlcss); 
    document.getElementsByTagName("head")[0].appendChild(newCSS);
};


export const loadJs =  (urlJs) => {
    let newJs = document.createElement("script");
    newJs.type = "text/javascript";
    newJs.src = encodeURI(urlJs); 
    document.getElementsByTagName("head")[0].appendChild(newJs);
};

