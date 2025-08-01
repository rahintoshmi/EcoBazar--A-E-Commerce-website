
//for Banner slider starts
$(document).ready(function(){
  $('.bannerSlider').slick({
     prevArrow: "#bannerleftArrow",
     nextArrow: "#bannerrightArrow",
     dots:true,
     dotsClass:'slider-dots',
  });
   // SEARCH BAR APPEAR
  $(".glassmenu").click(function () {
    $(".searchMenu").addClass("active");
  });

  $(document).on("keydown", function (event) {
    if (event.key === "Escape") {
      $(".searchMenu").removeClass("active");
    }
  });
  $(".closeSearch").click(function () {
    $(".searchMenu").removeClass("active");
  });
  //mobile menu cancel icon
   // Add this to your existing JS
const closeBtn = document.querySelector('.fa-xmark');
if (closeBtn) {
    closeBtn.addEventListener('click', function() {
        var offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('offcanvasExample'));
        if (offcanvas) {
            offcanvas.hide();
        }
    });
}
//for boxicon
const scrollBtn = document.getElementById("scrollToBanner");
  const banner = document.getElementById("banner");

  window.addEventListener("scroll", () => {
    const bannerBottom = banner.offsetTop + banner.offsetHeight;
    if (window.scrollY > bannerBottom) {
      scrollBtn.classList.add("show");
    } else {
      scrollBtn.classList.remove("show");
    }
  });
//features slider
$('#featured .featuredProducts .row').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 992, // For tablets
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false // Hide arrows on tablets
        }
      },
      {
        breakpoint: 768, // For smaller tablets
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false // Hide arrows on smaller tablets
        }
      },
      {
        breakpoint: 576, // For mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false // Hide arrows on mobile
        }
      }
    ]
  });
  //product category slider
   $('#productCategory .categoryCard').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
    {
      breakpoint: 768, 
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 576, 
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
  //food store delay animation
  
  AOS.init();// for AOS Animation
  //CounterUp animation
  var $counters = $(".count");
  var maxNumber = Math.max.apply(null, $counters.map(function() {
    return parseInt($(this).text());
  }).get());
  var baseDuration = 4000;
  $counters.each(function() {
    var $this = $(this);
    var targetNumber = parseInt($this.text());
    var speedFactor = maxNumber / targetNumber;
    var duration = baseDuration / speedFactor;
    
    $this.prop("Counter", 0).animate(
      { Counter: targetNumber },
      {
        duration: baseDuration, 
        easing: "linear", 
        step: function(now) {
          $this.text(Math.ceil(now).toLocaleString('en'));
        },
        complete: function() {
          $this.text(targetNumber.toLocaleString('en'));
        }
      }
    );
  });
  //seller products slider
  $('#sellerProduct .featuredProducts .row').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
//customer review slider
$('#CustomerReviews .review-slider').slick({
  slidesToShow: 3,
  arrows: true,
  prevArrow: $('#prev'),
  nextArrow: $('#next'),
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

  //shopping cart increment decrement 
  // cart.js - Works for both shopping cart and billing information pages
  // Initialize cart data in localStorage if not exists
  if (!localStorage.getItem('cartData')) {
    localStorage.setItem('cartData', JSON.stringify({
      items: [],
      subtotal: 0,
      total: 0
    }));
  }

  // 1. Store original prices and quantities
  $('.price').each(function() {
    const price = parseFloat($(this).text().replace('$', ''));
    $(this).data('original-price', price);
  });

  $('.quality').each(function() {
    const val = parseInt($(this).val());
    $(this).data('original-value', val);
  });

  // 2. Calculate and display initial subtotals
  calculateSubtotals();

  // 3. Increment button
  $(document).on('click', '.incrementBtn', function() {
    const input = $(this).siblings('.quality');
    let quantity = parseInt(input.val()) + 1;
    input.val(quantity).trigger('change');
  });

  // 4. Decrement button
  $(document).on('click', '.decrementBtn', function() {
    const input = $(this).siblings('.quality');
    let quantity = parseInt(input.val());
    if (quantity > 1) {
      quantity--;
      input.val(quantity).trigger('change');
    }
  });

  // 5. Quantity change handler
  $(document).on('change', '.quality', function() {
    const row = $(this).closest('tr');
    const productName = row.find('h3').text();
    const price = parseFloat(row.find('.price').data('original-price'));
    const quantity = parseInt($(this).val());
    const newSubtotal = price * quantity;
    
    row.find('.subtotal').text(`$${newSubtotal.toFixed(2)}`);
    updateCartData(productName, price, quantity);
    calculateSubtotals();
  });

  // 6. Close button
  $(document).on('click', '.closeBtn, .closeBtn i', function(e) {
    e.preventDefault();
    const button = $(this).hasClass('closeBtn') ? $(this) : $(this).parent();
    const row = button.closest('tr');
    const productName = row.find('h3').text();

    removeFromCart(productName);
    
    const originalPrice = parseFloat(row.find('.price').data('original-price'));
    row.find('.quality').val(1);
    row.find('.subtotal').text(`$${originalPrice.toFixed(2)}`);

    calculateSubtotals();
  });

  // 7. Update Cart button
  $(document).on('click', 'a[href="#"]', function(e) {
    if ($(this).text().trim() === 'Update Cart') {
      e.preventDefault();
      resetCartToOriginal();
      calculateSubtotals();
    }
  });

  // 8. Proceed to Checkout button
  $(document).on('click', 'a[href="./billing Information.html"]', function(e) {
    e.preventDefault();
    saveCartData();
    window.location.href = $(this).attr('href');
  });

  // Helper functions
  function calculateSubtotals() {
    let subtotal = 0;
    $('tr').each(function() {
      const subtotalCell = $(this).find('.subtotal');
      if (subtotalCell.length) {
        const itemSubtotal = parseFloat(subtotalCell.text().replace('$', '')) || 0;
        subtotal += itemSubtotal;
      }
    });

    // Update the cart total section
    $('.cartTable .subtotal').text(`$${subtotal.toFixed(2)}`);
    $('.cartTable .total').text(`$${subtotal.toFixed(2)}`); // Assuming no shipping
    
    return subtotal;
  }

  function updateCartData(productName, price, quantity) {
    const cartData = JSON.parse(localStorage.getItem('cartData'));
    const existingItemIndex = cartData.items.findIndex(item => item.name === productName);
    
    if (existingItemIndex !== -1) {
      cartData.items[existingItemIndex].quantity = quantity;
      cartData.items[existingItemIndex].subtotal = price * quantity;
    } else {
      cartData.items.push({
        name: productName,
        price: price,
        quantity: quantity,
        subtotal: price * quantity
      });
    }
    
    cartData.subtotal = calculateSubtotals();
    cartData.total = cartData.subtotal; // Assuming no shipping/tax
    
    localStorage.setItem('cartData', JSON.stringify(cartData));
  }

  function removeFromCart(productName) {
    const cartData = JSON.parse(localStorage.getItem('cartData'));
    cartData.items = cartData.items.filter(item => item.name !== productName);
    localStorage.setItem('cartData', JSON.stringify(cartData));
  }

  function resetCartToOriginal() {
    $('.quality').each(function() {
      const original = $(this).data('original-value');
      $(this).val(original).trigger('change');
    });

    $('.price').each(function() {
      const price = $(this).data('original-price');
      const row = $(this).closest('tr');
      const originalQuantity = row.find('.quality').val();
      const newSubtotal = price * originalQuantity;
      row.find('.subtotal').text(`$${newSubtotal.toFixed(2)}`);
    });
  }

  function saveCartData() {
    const cartData = {
      items: [],
      subtotal: calculateSubtotals(),
      total: calculateSubtotals() // Assuming no shipping/tax
    };
    
    $('tr').each(function() {
      const name = $(this).find('h3').text();
      if (name) {
        const price = parseFloat($(this).find('.price').data('original-price'));
        const quantity = parseInt($(this).find('.quality').val());
        
        cartData.items.push({
          name: name,
          price: price,
          quantity: quantity,
          subtotal: price * quantity
        });
      }
    });
    
    localStorage.setItem('cartData', JSON.stringify(cartData));
  }
  let cartData = JSON.parse(localStorage.getItem('cartData'));

  if (cartData && cartData.items.length > 0) {
    renderOrderSummary(cartData);
  }

  // Event listener for updating quantity
  $(document).on('change', '.quantity-input', function () {
    const itemName = $(this).data('item-name');
    const newQuantity = parseInt($(this).val(), 10);

    // Find the item in the cart and update its quantity
    const item = cartData.items.find(i => i.name === itemName);
    if (item) {
      item.quantity = newQuantity;
      item.subtotal = item.price * newQuantity; // Assuming price is available for each item
    }

    // Update localStorage and re-render the order summary
    localStorage.setItem('cartData', JSON.stringify(cartData));
    renderOrderSummary(cartData);
  });

  function renderOrderSummary(cartData) {
  // First validate the cartData
  if (!cartData || !cartData.items) {
    console.error("Invalid cart data:", cartData);
    cartData = { items: [], subtotal: 0, total: 0 };
  }

  const $orderSummary = $('.order');

  // Remove previously inserted items to avoid duplication
  $orderSummary.find('.row.order-item').remove();

  // Insert each item with proper null checks
  cartData.items.forEach(item => {
    if (!item) return; // Skip if item is null/undefined
    
    // Ensure all required fields exist with fallbacks
    const itemName = item.name || "Unknown Product";
    const quantity = item.quantity || 0;
    const subtotal = item.subtotal || 0;
    const price = item.price || 0;
    
    // Safely format numbers
    const formattedSubtotal = subtotal.toFixed(2);
    const formattedPrice = price.toFixed(2);

    const itemHtml = `
      <div class="row d-flex order-item">
        <div class="col-8 d-flex align-items-center">
          <img src="./images/shoppingcartSmall${itemName.replace(/\s/g, '')}.png" class="img-fluid" alt="${itemName}">
          <h4>${itemName} 
            <span class="quantity">* 
              <input type="number" class="quantity-input" value="${quantity}" data-item-name="${itemName}" min="1" />
            </span>
          </h4>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end">
          <h2 class="subtotal">$${formattedSubtotal}</h2>
        </div>
      </div>
    `;
    $orderSummary.find('.summary').before(itemHtml);
  });

  // Update subtotal and total with null checks
  const formattedSubtotal = (cartData.subtotal || 0).toFixed(2);
  const formattedTotal = (cartData.total || 0).toFixed(2);
  
  $('.order .subtotal').text(`$${formattedSubtotal}`);
  $('.order .total').text(`$${formattedTotal}`);
}
  //for product details verstical slider page
  $('.productThumbSlider').slick({
    slidesToShow: 4,
    vertical: true,
    arrows: false,
    asNavFor: '.productGallerySlider',
    focusOnSelect:true,
    verticalSwiping:true,
    responsive:[
    {
      breakpoint: 768,
      settings: {
        vertical:false,
        adaptiveHeight:true,
      }
    },
    ]
  })
  $('.productGallerySlider').slick({
    slidesToShow: 1,
    arrows: false,
    asNavFor: '.productThumbSlider',
  })
});

//for mouse move
let cursorSM = document.querySelector('.cursor-sm');

// Make sure element exists
if (!cursorSM) {
    console.error("Cursor element not found!");
} else {
    window.addEventListener('mousemove', function(event) {
        cursorSM.style.transform = `translate(calc(${event.clientX}px - 50%), calc(${event.clientY}px - 50%))`;
    });
}


