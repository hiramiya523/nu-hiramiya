fn main(){
    // 文字表示
    let banana = 300;
    println!("バナナの値段は{}円", banana);

    // 演算
    // 整数型と実数型があり、実数型は.0まで記述する必要がある
    let moon = 383300.0;
    let btrain = 300.0;
    println!("月まで新幹線で{}日", moon / btrain / 24.0);

    /*
        for
     */
    for i in 0..9 {
        println!("{}", i);
    }
}
