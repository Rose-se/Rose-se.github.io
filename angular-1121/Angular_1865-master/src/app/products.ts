export interface Product{
    id: number,
    name: string,
    price: number,
    description: string,
    quanity:number,
    totalprice: number
}
export interface CartItem{
    id:number;
    name: string;
    price:number;
}

export const products = [
    {
        id:1,
        name: "Iphone13 mini",
        price: 25000,
        description: "Consectetur mollit deserunt ad minim est. Duis laborum nostrud nulla enim proident tempor qui amet pariatur esse. Occaecat ut sint eu deserunt ullamco in minim. Deserunt deserunt eu fugiat non non. Mollit magna id consequat occaecat ad sunt mollit voluptate culpa. Velit qui ea ex minim nostrud esse pariatur qui sint adipisicing labore adipisicing. Sunt nulla dolore dolor ullamco.",
        quanity:1,
        totalprice: 0
    },
    {
        id:2,
        name: "Iphone13 ",
        price: 35000,
        description: "Consectetur mollit deserunt ad minim est. Duis laborum nostrud nulla enim proident tempor qui amet pariatur esse. Occaecat ut sint eu deserunt ullamco in minim. Deserunt deserunt eu fugiat non non. Mollit magna id consequat occaecat ad sunt mollit voluptate culpa. Velit qui ea ex minim nostrud esse pariatur qui sint adipisicing labore adipisicing. Sunt nulla dolore dolor ullamco.",
        quanity:1,
        totalprice: 0


    },
    {
        id:3,
        name: "Iphone13 pro",
        price: 45000,
        description: "Consectetur mollit deserunt ad minim est. Duis laborum nostrud nulla enim proident tempor qui amet pariatur esse. Occaecat ut sint eu deserunt ullamco in minim. Deserunt deserunt eu fugiat non non. Mollit magna id consequat occaecat ad sunt mollit voluptate culpa. Velit qui ea ex minim nostrud esse pariatur qui sint adipisicing labore adipisicing. Sunt nulla dolore dolor ullamco."
        ,quanity:1,
        totalprice: 0


    },
    {
        id:4,
        name: "Iphone13 pro-max",
        price: 55000,
        description: "Consectetur mollit deserunt ad minim est. Duis laborum nostrud nulla enim proident tempor qui amet pariatur esse. Occaecat ut sint eu deserunt ullamco in minim. Deserunt deserunt eu fugiat non non. Mollit magna id consequat occaecat ad sunt mollit voluptate culpa. Velit qui ea ex minim nostrud esse pariatur qui sint adipisicing labore adipisicing. Sunt nulla dolore dolor ullamco."
        ,quanity:1,
        totalprice: 0

 
    },
]