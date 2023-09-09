<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
table,
th,
td {
  border-collapse: collapse;
  padding: 1rem;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "open sans", sans-serif;
}

body {
  min-height: 100vh;
  background-color: #000;
  background-image: url(https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1517&q=80);
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.img {
  width: 36px;
  height: 36px;
  margin-right: 0.5rem;
  border-radius: 50%;
  vertical-align: middle;
}

.table {
  width: 82vw;
  height: 90vh;
  background-color: #fff5;
  backdrop-filter: blur(7px);
  box-shadow: 0 0.4rem 0.8rem #0005;
  border-radius: 0.8rem;
  overflow: hidden;
}

.table_header {
  width: 100%;
  height: 10%;
  background-color: #fff4;
  padding: .8rem 1rem;
}

.table_body {
  width: 95%;
  max-height: calc(89% - .8rem);
  background-color: #fffb;
  margin: .8rem auto;
  border-radius: .6rem;
  overflow: auto;
}

.table_body::-webkit-scrollbar {
  width: 0.5rem;
  height: 0.5rem;
}

.table_body::-webkit-scrollbar-thumb{
  border-radius: .5rem;
  background-color: #00004;
  visibility: hidden;
}

.table_body:hover::-webkit-scrollbar-thumb{
  visibility: visible;
}

table {
  width:100%;
}

thead th {
  position: sticky;
  top: 0;
  left: 0;
  background-color: #d5d1defe;
}

tbody tr:nth-child(even) {
  background-color: #0000000b;
}

tbody tr:hover {
  background-color: #fff6;
}

</style>
    <title>Web Design</title>
  </head>
  <body>
    <main class="table" style="
    ">
      <section class="table_header">
        <h1>Customer's Orders</h1>
      </section>
      <section class="table_body">
        <table>
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Tanggal Beli</th>
              <th>Tanggal Bayar</th>
              <th>Pembayaran</th>
              <th>Pendapatan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <img src="ft.jpeg" alt="" class="img" />
                Muhammad Azka Pratama
              </td>
              <td>09 September 2023</td>
              <td>10 September 2023</td>
              <td>Rp 50.000</td>
              <td>Rp 2.000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>
                <img src="ft2.jpg" alt="" class="img" />
                Faiz Muhammad Rijal Fikri
              </td>
              <td>09 September 2023</td>
              <td>10 September 2023</td>
              <td>Rp 50.000</td>
              <td>Rp 2.000</td>
            </tr>
            <tr>
              <td>3</td>
              <td>
                <img src="ft3.jpeg" alt="" class="img" />
                Elsa Oca Oktavia
              </td>
              <td>09 September 2023</td>
              <td>10 September 2023</td>
              <td>Rp 50.000</td>
              <td>Rp 2.000</td>
            </tr>
            
          </tbody>
        </table>
      </section>
    </main>
  </body>
</html>
