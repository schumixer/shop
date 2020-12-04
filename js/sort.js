window.onload = ()=>{
    data = ['sort', 'order'];
    $(".custom-form__select").change(function(){
        let products = $("article.product");
    
        let sorts = $(".custom-form__select");
        if(!data.includes(sorts[0].value) && !data.includes(sorts[1].value)){
            for (let index = 0; index < products.length; index++) {
                products[index].remove();
            }
            

            console.log(products)
            if(sorts[0].value=='price'){
                if(sorts[1].value=='asc') {
                    products.sort((a,b)=>{
                        let value1 = parseInt($(a).children(".product__price").text(),10);
                        let value2 = parseInt($(b).children(".product__price").text(),10);
                        if(value1>value2)
                            return 1
                        else if (value1<value2)
                            return -1
                        return 0
                    }
                    )
                }
                else {
                    products.sort((a,b)=>{
                        let value1 = parseInt($(a).children(".product__price").text(),10);
                        let value2 = parseInt($(b).children(".product__price").text(),10);
                        if(value1>value2)
                            return -1
                        else if (value1<value2)
                            return 1
                        return 0
                    }
                    )
                }
            }
            else {
                if(sorts[1].value=='asc') {
                    products.sort((a,b)=>{
                        let value1 = $(a).children(".product__name").text();
                        let value2 = $(b).children(".product__name").text();
                        if(value1>value2)
                            return 1
                        else if (value1<value2)
                            return -1
                        return 0
                    }       

                    )
                }
                else {
                    products.sort((a,b)=>{
                        let value1 = $(a).children(".product__name").text();
                        let value2 = $(b).children(".product__name").text();
                        if(value1>value2)
                            return -1
                        else if (value1<value2)
                            return 1
                        return 0
                    }
                    )
                }
            }
            console.log(products)
            for (let index = 0; index < products.length; index++) {
                $(".shop__list").append(products[index]);
            }

        }

        
        

    })
}