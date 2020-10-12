let data = ""
let filtered = []
function getPixabay() {

    const api_key = '18254741-ce7f3e60a43d460c4e262ec4f';
    let searchId = document.getElementById('search').value;
    const getRequest = document.getElementById('get-pixabay');
   
    // const  checkbox = document.getElementsByClassName("check");
    // console.log(checkbox);
    // let y;
    const pixabay_url = 'https://pixabay.com/api/?key='+api_key+ '&q='+encodeURIComponent(searchId);
        const getData = () => {
            axios.get(pixabay_url).then(response =>{
                data = response.data.hits
                console.log(data)
                for(const [index, endpoint] in Object.entries(data)){
                    let image = document.createElement('img');
                    // create image tag
                    image.src = data[index].previewURL;
                    document.getElementById('imageFetch').appendChild(image);
                    //create checkbox
                    let checkbox =  document.createElement("input");
                    checkbox.type = 'checkbox'
                    checkbox.id = index;
                    checkbox.className = 'imageBox'
                    document.getElementById('imageFetch').append(checkbox)
                }
                
            });
                
        };
        
    getRequest.addEventListener('click', getData());
    
}

function handleClickToSaveToDB(){
    // filtered = []
    selectedImages = document.getElementsByClassName("imageBox")

    for (let i = 0; i < selectedImages.length; i++){
        if (selectedImages[i].checked){
            filtered.push(data[selectedImages[i].id].pageURL)
        }
        
    }
    // console.log(filtered)
    // return filtered
}


