document.addEventListener('DOMContentLoaded', () => {

  const inputElement = document.querySelector('.phone')
  const maskOptions = {
    mask: '+{7}(000)000-00-00' 
  }
  IMask(inputElement, maskOptions) 

})
