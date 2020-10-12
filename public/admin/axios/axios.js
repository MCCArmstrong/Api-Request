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
                for(key in data){
                    let imageObject = data[key];
                    let image = document.createElement('img');
                    image.src = data[key].previewURL;
                    document.getElementById('imageFetch').appendChild(image);
                    console.log(data[key]);

                    let checkbox =  document.createElement("input");
                    checkbox.type = 'checkbox'
                    checkbox.id = key;
                    checkbox.className = 'imageBox'
                    document.getElementById('imageFetch').append(checkbox)

                }

                // for(const [index, endpoint] in Object.entries(data)){
                //     let image = document.createElement('img');
                //     // create image tag
                //     image.src = data[index].previewURL;
                //     document.getElementById('imageFetch').appendChild(image);
                //     //create checkbox
                //     // let checkbox =  document.createElement("input");
                //     // checkbox.type = 'checkbox'
                //     // checkbox.id = index;
                //     // checkbox.className = 'imageBox'
                //     // document.getElementById('imageFetch').append(checkbox)
                // }
                
            });
                
        };
        
    getRequest.addEventListener('click', getData());
    
}

function handleClickToSaveToDB(){
    // filtered = []
    selectedImages = document.getElementsByClassName("imageBox")

    for (let i = 0; i < selectedImages.length; i++){
        if (selectedImages[i].checked){
            filtered.push(data[selectedImages[i].id].previewURL)
        }
        
    }
    let formData = new FormData();
    formData.append('_token', $('input[name=_token]').val());
    formData.append('images', JSON.stringify(filtered));

    axios.post('/upload-image-urls', formData).then(response =>{
        console.log(response.data);
    });
}


