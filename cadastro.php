<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Conta | Kids Academy</title>
  <link rel="stylesheet" href="./styles/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
  <form action="" method="post" id="register-form">
    <div class="register-information">
      <fieldset class="font-1-m">Informações do Aluno</fieldset>
      <div class="register-data">
        <div class="left-side">
          <div class="studentFirstName">
            <label for="studentFirstName"></label>
            <input type="text" name="studentFirstName" id="studentFirstName" placeholder="Primeiro Nome" required>
          </div>
          <div class="studentEmail">
            <label for="studentEmail"></label>
            <input type="email" name="studentEmail" id="studentEmail" placeholder="Endereço de Email" required>
          </div>
          <div class="studentBirthDate">
            <label for="studentBirthDate"></label>
            <input type="text" name="studentBirthDate" id="studentBirthDate" placeholder="Data de Nascimento" onfocus="(this.type='date')" required>
          </div>
        </div>
        <div class="right-side">
          <div>
            <div class="studentLastName">
              <label for="studentLastName"></label>
              <input type="text" name="studentLastName" id="studentLastName" placeholder="Sobrenome" required>
            </div>
            <div class="studentPassword">
              <label for="studentPassword"></label>
              <input type="password" name="studentPassword" id="studentPassword" placeholder="Senha" required>
            </div>
            <div class="studentCPF">
              <label for="studentCPF"></label>
              <input type="text" name="studentCPF" id="studentCPF" placeholder="CPF" required>
            </div>
          </div>
        </div>
      </div>

      <fieldset class="font-1-m">Informações do Responsável</fieldset>
      <div class="register-data">
        <div class="left-side">
          <div class="parentFirstName">
            <label for="parentFirstName"></label>
            <input type="text" name="parentFirstName" id="parentFirstName" placeholder="Primeiro Nome" required>
          </div>
          <div class="parentEmail">
            <label for="parentEmail"></label>
            <input type="email" name="parentEmail" id="parentEmail" placeholder="Endereço de Email" required>
          </div>
          <div class="parentContact1">
            <label for="parentContact1"></label>
            <input type="text" name="parentContact1" id="parentContact1" placeholder="Contato" required>
          </div>
        </div>
        <div class="right-side">
          <div>
            <div class="parentLastName">
              <label for="parentLastName"></label>
              <input type="text" name="parentLastName" id="parentLastName" placeholder="Sobrenome" required>
            </div>
            <div class="parentCPF">
              <label for="parentCPF"></label>
              <input type="text" name="parentCPF" id="parentCPF" placeholder="CPF" required>
            </div>
            <div class="parentContact2">
              <label for="parentContact2"></label>
              <input type="text" name="parentContact2" id="parentContact2" placeholder="Contato 2 (Opcional)">
            </div>
          </div>
        </div>
      </div>
      <button class="btn primary font-1-btn clr-green02" type="submit">CRIAR CONTA</button>
    </div>

    <div class="plans">
      <fieldset class="font-1-m clr-gray10">Planos</fieldset>
      <div class="plan" id="essential-div">
        <label class="plans-label" for="essential">
          <h4 class="font-1-m clr-gray11">Essencial</h4>
          <p class="font-1-m clr-gray10">R$ 29,90</p>
          <p class="font-1-s-b clr-gray09">por mês</p>
        </label>
        <input class="hidden-input" type="radio" name="plan" value="essential" id="essential" onclick="styleChange()">
      </div>
      <div class="plan" id="essential-plus-div">
        <label class="plans-label" for="essential-plus">
          <h4 class="font-1-m clr-gray11">Essencial +</h4>
          <p class="font-1-m clr-gray10">R$ 49,90</p>
          <p class="font-1-s-b clr-gray09">por mês</p>
        </label>
        <input class="hidden-input" type="radio" name="plan" value="essential-plus" id="essential-plus" onclick="styleChange()">
      </div>

      <div class="payment-forms">
        <fieldset class="font-1-m clr-gray10">Formas de Pagamento</fieldset>
        <div class="payment-forms-wrapper">
          <div>
            <input class="hidden-input check-with-label" type="radio" name="paymentForm" id="bank-slip" value="bank-slip">
            <label class="label-for-check" for="bank-slip">
              <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.125 0C4.16016 0 5 0.839844 5 1.875V33.125C5 34.1641 4.16016 35 3.125 35H1.875C0.839844 35 0 34.1641 0 33.125V1.875C0 0.839844 0.839844 0 1.875 0H3.125ZM10 1.25V33.75C10 34.4375 9.4375 35 8.75 35C8.0625 35 7.5 34.4375 7.5 33.75V1.25C7.5 0.559375 8.0625 0 8.75 0C9.4375 0 10 0.559375 10 1.25ZM15.625 0C16.6641 0 17.5 0.839844 17.5 1.875V33.125C17.5 34.1641 16.6641 35 15.625 35H14.375C13.3359 35 12.5 34.1641 12.5 33.125V1.875C12.5 0.839844 13.3359 0 14.375 0H15.625ZM23.125 0C24.1641 0 25 0.839844 25 1.875V33.125C25 34.1641 24.1641 35 23.125 35H21.875C20.8359 35 20 34.1641 20 33.125V1.875C20 0.839844 20.8359 0 21.875 0H23.125ZM35 1.875C35 0.839844 35.8359 0 36.875 0H38.125C39.1641 0 40 0.839844 40 1.875V33.125C40 34.1641 39.1641 35 38.125 35H36.875C35.8359 35 35 34.1641 35 33.125V1.875ZM30 1.25C30 0.559375 30.5625 0 31.25 0C31.9375 0 32.5 0.559375 32.5 1.25V33.75C32.5 34.4375 31.9375 35 31.25 35C30.5625 35 30 34.4375 30 33.75V1.25Z" fill="black" />
              </svg>
            </label>
          </div>
          <div>
            <input class="hidden-input check-with-label" type="radio" name="paymentForm" id="pix" value="pix">
            <label class="label-for-check" for="pix">
              <svg width="40" height="35" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.9375 22.8515C19.3593 22.4296 20.0859 22.4296 20.5078 22.8515L26.5234 28.8671C27.6328 29.9765 29.1093 30.5859 30.6718 30.5859H31.8515L24.2656 38.1718C21.8984 40.4765 18.0546 40.4765 15.6875 38.1718L8.07027 30.5625H8.79684C10.3593 30.5625 11.8359 29.9531 12.9453 28.8437L18.9375 22.8515ZM20.5078 17.1015C20.0078 17.5312 19.3671 17.539 18.9375 17.1015L12.9453 11.1093C11.8359 9.92965 10.3593 9.39059 8.79684 9.39059H8.07027L15.6796 1.77809C18.0546 -0.592695 21.8984 -0.592695 24.2656 1.77809L31.8593 9.36715H30.6718C29.1093 9.36715 27.6328 9.97652 26.5234 11.0859L20.5078 17.1015ZM8.79684 11.1484C9.87496 11.1484 10.8671 11.5859 11.6953 12.3515L17.6875 18.3437C18.25 18.8359 18.9843 19.1875 19.7265 19.1875C20.4609 19.1875 21.1953 18.8359 21.7578 18.3437L27.7734 12.3281C28.539 11.5703 29.5937 11.1328 30.6718 11.1328H33.6171L38.1718 15.6875C40.539 18.0546 40.539 21.8984 38.1718 24.2656L33.6171 28.8203H30.6718C29.5937 28.8203 28.539 28.3828 27.7734 27.6171L21.7578 21.6015C20.6718 20.5156 18.7734 20.5156 17.6875 21.6093L11.6953 27.5937C10.8671 28.3593 9.87496 28.7968 8.79684 28.7968H6.3109L1.77809 24.2656C-0.592695 21.8984 -0.592695 18.0546 1.77809 15.6875L6.3109 11.1484H8.79684Z" fill="black" />
              </svg>
            </label>
          </div>
          <div>
            <input class="hidden-input check-with-label" type="radio" name="paymentForm" id="credit-card" value="credit-card">
            <label class="label-for-check" for="credit-card">
              <svg width="40" height="35" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35.5556 0.152832C38.0069 0.152832 40 2.14242 40 4.59728V6.8195H0V4.59728C0 2.14242 1.98958 0.152832 4.44444 0.152832H35.5556ZM40 26.8195C40 29.2709 38.0069 31.2639 35.5556 31.2639H4.44444C1.98958 31.2639 0 29.2709 0 26.8195V13.4862H40V26.8195ZM7.77778 22.3751C7.16667 22.3751 6.66667 22.8751 6.66667 23.4862C6.66667 24.0973 7.16667 24.5973 7.77778 24.5973H12.2222C12.8333 24.5973 13.3333 24.0973 13.3333 23.4862C13.3333 22.8751 12.8333 22.3751 12.2222 22.3751H7.77778ZM16.6667 24.5973H25.5556C26.1667 24.5973 26.6667 24.0973 26.6667 23.4862C26.6667 22.8751 26.1667 22.3751 25.5556 22.3751H16.6667C16.0556 22.3751 15.5556 22.8751 15.5556 23.4862C15.5556 24.0973 16.0556 24.5973 16.6667 24.5973Z" fill="black" />
              </svg>
            </label>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script>
    let essential = document.getElementById("essential");
    let essential_plus = document.getElementById("essential-plus");
    let essential_div = document.getElementById("essential-div");
    let essential_plus_div = document.getElementById("essential-plus-div");

    function styleChange() {
      if (essential.checked) {
        essential_plus_div.style.backgroundColor = "#f2a3fb";
        essential_div.style.backgroundColor = "#fff";
      } else if (essential_plus.checked) {
        essential_div.style.backgroundColor = "#f2a3fb";
        essential_plus_div.style.backgroundColor = "#fff";
      }
    }
  </script>
</body>

</html>