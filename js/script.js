document.addEventListener('DOMContentLoaded', () => {
  console.log("Carpenter Zone luxury web system loaded.");
});

function handleImgError(img) {
  img.onerror = null;
  img.src = "https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=800&auto=format&fit=crop";
}

function handleQuoteSubmit(e) {
  e.preventDefault();
  alert("Thank you! Your enquiry has been received. Our team will contact you soon.");
}
`);


 //Structured Data JSON-LD//
 
  {
    "@context": "https://schema.org",
    "@type": "HomeAndConstructionBusiness",
    "name": "Carpenter Zone",
    "image": "https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=1200&auto=format&fit=crop",
    "description": "Premium custom furniture, architectural woodwork, modular kitchens, and residential interior carpentry.",
    "email": "hello@carpenterzone.com",
    "telephone": "+91 00000 00000",
    "priceRange": "$$",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "IN"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      "opens": "09:00",
      "closes": "18:00"
    }
  }
 