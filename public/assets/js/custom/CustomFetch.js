export function CustomFetch(url){

    this.requestData = {
        url : url,
        options : {
            headers: {
                'Content-Type': 'application/json',
            },
        }
    }
    this.request = async function(){

    }

    this.post = async function(){}
    this.get = async function(){}

}

