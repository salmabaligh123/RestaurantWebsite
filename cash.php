<style>
  body {
    font-family: 'Roboto', sans-serif !important;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .mainscreen {
    min-height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    background-color: #DFDBE5;
    background-image: url("");
    color: #030002;
  }

  .card {
    width: 60rem;
    margin: auto;
    background: white;
    position: center;
    align-self: center;
    top: 50rem;
    border-radius: 1.5rem;
    box-shadow: 4px 3px 20px #3535358c;
    display: flex;
    flex-direction: row;

  }

  .leftside {
    background: #030303;
    width: 25rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
  }

  .product {
    object-fit: cover;
    width: 20em;
    height: 20em;
    border-radius: 100%;
  }

  .rightside {
    background-color: #ffffff;
    width: 35rem;
    border-bottom-right-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 1rem 2rem 3rem 3rem;
  }

  p {
    display: block;
    font-size: 1.1rem;
    font-weight: 400;
    margin: .8rem 0;
  }

  .inputbox {
    color: #030303;
    width: 100%;
    padding: 0.5rem;
    border: none;
    border-bottom: 1.5px solid #ccc;
    margin-bottom: 1rem;
    border-radius: 0.3rem;
    font-family: 'Roboto', sans-serif;
    color: #615a5a;
    font-size: 1.1rem;
    font-weight: 500;
    outline: none;
  }

  .expcvv {
    display: flex;
    justify-content: space-between;
    padding-top: 0.6rem;
  }

  .expcvv_text {
    padding-right: 1rem;
  }

  .expcvv_text2 {
    padding: 0 1rem;
  }

  .button {
    background: linear-gradient(135deg, #0b070b 0%, #473612 100%);
    padding: 15px;
    border: none;
    border-radius: 50px;
    color: white;
    font-weight: 400;
    font-size: 1.2rem;
    margin-top: 10px;
    width: 100%;
    letter-spacing: .11rem;
    outline: none;
  }

  .button:hover {
    transform: scale(1.05) translateY(-3px);
    box-shadow: 3px 3px 6px #38373785;
  }

  @media only screen and (max-width: 1000px) {
    .card {
      flex-direction: column;
      width: auto;

    }

    .leftside {
      width: 100%;
      border-top-right-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 0;
      border-radius: 0;
    }

    .rightside {
      width: auto;
      border-bottom-left-radius: 1.5rem;
      padding: 0.5rem 3rem 3rem 2rem;
      border-radius: 0;
    }
  }
</style>
<html>

<div class="mainscreen">
  <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">-->
  <div class="card">
    <div class="leftside">
      <img src="https://img.myloview.com/stickers/money-cash-icon-outline-money-cash-vector-icon-for-web-design-isolated-on-white-background-700-207567602.jpg" class="product" alt="Shoes" />
    </div>
    <div class="rightside">
      <form action="purchase.php" method="POST">
        <h1>CheckOut</h1>
        <h2>Payment Procedures</h2>
        <p> Address </p>
        <input type="text" class="inputbox" name="Address" required />

        <p> City </p>
        <select class="inputbox" name="card_number" id="card_type" required>
          <option value="">--Select a Region--</option>
          <option value="Visa">Cairo</option>
          <option value="RuPay">Alexandria</option>
          <option value="MasterCard">North Coast</option>
        </select>

        <p> Area </p>
        <select class="inputbox" name="card_number" id="card_type" required>
          <option value="">--Select a Region--</option>
          <option value="Visa"> New Cairo</option>
          <option value="RuPay">Heliopolis</option>
          <option value="MasterCard">Hacienda Red</option>
          <option value="MasterCard">Marassi</option>
          <option value="MasterCard">Gleem Bay</option>
          <option value="MasterCard">Miami Alexandria</option>
        </select>

        <p> Phone number </p>
        <input type="number" class="inputbox" name="1" required />

        <div class="expcvv">

        </div>
        <p></p>
        <button type="submit" class="button">CheckOut</button>
      </form>
    </div>
  </div>
</div>


</html>