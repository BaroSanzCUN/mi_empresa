// Main JavaScript file for mi_empresa
document.addEventListener('DOMContentLoaded', function() {
    loadProducts();
    setupNavigation();
});

// API base URL - adjust this if your API is hosted elsewhere
const API_BASE_URL = 'api.php';

// Load and display products
async function loadProducts() {
    const productsContainer = document.getElementById('products-container');
    
    try {
        // Show loading message
        productsContainer.innerHTML = '<div class="loading">Cargando productos...</div>';
        
        const response = await fetch(`${API_BASE_URL}`);
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        
        if (data.records && data.records.length > 0) {
            displayProducts(data.records);
        } else {
            productsContainer.innerHTML = '<div class="error">No se encontraron productos.</div>';
        }
    } catch (error) {
        console.error('Error loading products:', error);
        productsContainer.innerHTML = `
            <div class="error">
                Error al cargar productos. Por favor, verifique que el servidor esté funcionando.
                <br><small>Error: ${error.message}</small>
            </div>
        `;
    }
}

// Display products in the grid
function displayProducts(products) {
    const productsContainer = document.getElementById('products-container');
    
    const productsHTML = products.map(product => `
        <div class="product-card">
            <h3>${escapeHtml(product.name)}</h3>
            <p class="description">${escapeHtml(product.description || 'Sin descripción')}</p>
            <div class="price">$${parseFloat(product.price).toFixed(2)}</div>
            <div class="stock">Stock: ${product.stock_quantity} unidades</div>
            ${product.category_name ? `<span class="category">${escapeHtml(product.category_name)}</span>` : ''}
        </div>
    `).join('');
    
    productsContainer.innerHTML = productsHTML;
}

// Setup smooth scrolling navigation
function setupNavigation() {
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Utility function to escape HTML to prevent XSS
function escapeHtml(text) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}

// Function to format currency
function formatCurrency(amount) {
    return new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP'
    }).format(amount);
}

// Add some interactivity - highlight active navigation
window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const headerHeight = document.querySelector('header').offsetHeight;
        
        if (pageYOffset >= sectionTop - headerHeight - 200) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});