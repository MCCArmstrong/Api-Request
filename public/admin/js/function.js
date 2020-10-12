

if(window.Vue){

    new Vue({
        el: '#upload',
        
        data:{
            details: {

            },
            url : {
                storeDetails : "",
                storeImage : ""
            },
        },
        
        mounted(){
            this.url.storeDetails = document.getElementById("url").value;
            console.log(this.url.storeDetails)
        },
        methods:{
            store(){
                let formdata = new FormData;

                for( key in this.details){
                    let value = this.details[key]
                    if(key != "image"){
                        formdata.append(key, value)
                    }
                }
                for(key in this.details.image){
                    formdata.append("images[]", this.details.image[key])
                }
                formdata.append('_token', $('input[name=_token]').val())
                axios.post(this.url.storeDetails, formdata,{
                    headers: {
                        'Content-Type': 'multipart/form-data'
                }}).then((response)=>{
                    console.log('success')
                }).catch( (error) => {
                    console.log(error)
                });
            },
            // selectImage() {
            //     $('#selectImage').click()
            // },
            setImage(e){
                if (window.File && window.FileList && window.FileReader) {
                    var files = e.target.files; //FileList object
                    
                    this.details['image'] = files;
                    console.log(this.details['image'])
                } else {
                    console.log("could not send request")
                }
            },
           
        }
})
}