@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{

        margin: 0;
        padding: 0;
        font-family: 'Roboto',sans-serif;
    
}
.container {
    width: 100%;
    height: 400%;
    background: url('./Mango\ Pulp.png') no-repeat;
    background-position: center;
    background-size: cover;
    padding-left: 8%;
    padding-right: 8%;
    box-sizing: border-box;
    
    }
    .navbar { 
        height: 12%;
        display: flex;
        align-items: center;
    }
    .logo { 
        width: 30px;
        cursor: pointer;
    }
    .menu-icon{ 
        width: 10px;
        cursor: pointer;
      
    }
    nav{ 
    flex: 1;
    text-align: right;
    }

    nav ul li { 
        list-style: none;
        display: inline-block;
        margin-left: 60px;
    }
    nav ul li a{ 
    text-decoration: none;
    color:#fff;
    font-size: 13px;
    }
    .team-section{
        min-height: 100vh;
        padding:70px 15px 30px;
    }   

    .container2{
        max-width: 1130px;
        margin:auto;

    }
    
    .row{
        display: flex;
        flex-wrap: wrap;
    }
    
    .team-section .section-title{
        flex-basis: 100%;
        max-width: 100%;
        margin-bottom: 30px;
    }
    
    .team-section .section-title h1{
        font-size: 40px;
        text-align: center;
        margin:0;
        color: #fff;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .team-section .section-title p{
        font-size:16px;
        text-align: center;
        margin:15px 0 0;
        color:#f7e6e6;
    }
    .team-section .team-items{
        
        flex-basis: 100%;
        max-width: 80%;
        display:inline-flex;
        flex-wrap:wrap;
        justify-content: space-around;
    }
    .team-section .team-items .item{
     flex-basis: calc(25% - 50px);
     max-width: calc(25% -50px);
     transition: all .5s ease;
     margin-bottom: 10px;
    }
    .team-section .team-items .item img{
        display: flex;
        width: 100%;
        border-radius: 100px;
        position: relative;
        left: 100px;

    }
    
    .team-section .team-items .item .inner{
        position: relative;
        z-index: 11;
        padding:0 15px;
    }
    .team-section .team-items .item .inner .info{
        position:relative;
        left: 100px;
        background-color:#d47405;
        text-align: center;
        padding: 50px 5px;
        border-radius:8px;
        transition: all .5s ease;
        margin-top: 30px;
    }
    .team-section .team-items .item:hover  .info{
        transform: translateY(-20px);
    }
    .team-section .team-items .item:hover{
     transform: translateY(-10px);	
    }
    .team-section .team-items .item .inner .info h5{
        margin:0;
        font-size: 18px;
        font-weight: 400;
        color:#ffffff;
    }
    .team-section .team-items .item .inner .info p{
        font-size: 16px;
        font-weight: 400;
        color:#fdfafa;
        margin:10px ;
    }
    body{
        line-height: 1.5;
        font-family: 'Poppins', sans-serif;
    }
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container3{
        max-width: 1170px;
        margin:auto;
     
    }
    .row{
        display: flex;
        flex-wrap: wrap;
    }
    ul{
        list-style: none;
    }
    .footer{
        background-color: #24262b;
        padding: 20px 0;
    }
    .footer-col{
       width: 25%;
       padding: 0 15px;
       position: relative;
       left: 38%;
      
    }
    .footer-col h4{
        text-align: center;
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 20px;
        font-weight: 500;
        position: relative;
     
    }
    .footer-col h4::before{
        content: '';
        position: absolute;
        left: 40%;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }
    
    .footer-col .social-links a{
        position: relative;
        left: 25%;
        display: inline-block;
        height: 30px;
        width: 30px;
        background-color: rgba(255,255,255,0.2);
        margin:0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 10%;
        color: #ffffff;
        transition: all 0.5s ease;
    }
    .footer-col .social-links a:hover{
        color: #24262b;
        background-color: #ffffff;
    }
    
    /*responsive*/
    @media(max-width: 867px){
      .footer-col{
        width: 30%;
        margin-bottom: -10px;
        
    }
    }
    @media(max-width: 574px){
      .footer-col{
        width: 100%;
        position: relative;
    }
    }
    
    h5{
        font-size: 10px;
        color: #ffffff;
        text-transform: capitalize;
        font-weight: 200;
        position: relative;
        text-align: center;
        margin-top: 10px;
    }
    .dropbtn {
        margin-left: 50px;
        background-color: #fca400;
        color: white;
        padding: 6px;
        border-radius: 20PX;
        font-size: 16px;
        border: none;
      }
      
      .dropdown {
          margin: top 2px;
        position: relative;
        left: -20px;
        display: inline-block;
      }
      
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      
      .dropdown-content a:hover {background-color: rgb(247, 168, 66);}
      
      .dropdown:hover .dropdown-content {display: block;}
      
      .dropdown:hover .dropbtn {background-color: #FFFF00;}    
