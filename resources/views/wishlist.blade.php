@include('includes.header')

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <nav class="text-sm">
                <a href="/" class="text-ayur-green hover:text-ayur-gold">Home</a>
                <span class="mx-2 text-ayur-brown">></span>
                <span class="text-ayur-brown">Wishlist</span>
            </nav>
        </div>
    </div>

    <!-- Results Info -->
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- <p class="text-ayur-brown">Showing <span id="results-count">24</span> of <span id="total-count">24</span> products</p> -->
        </div>
    </div>

    <!-- Products Grid -->
    <div class="container mx-auto px-4 pb-16">
        <div id="products-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Products will be dynamically loaded here -->
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2 pagination-container">
            </nav>
        </div>
    </div>

    <!-- Quick View Modal -->
    <div id="quick-view-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
                <div id="modal-content" class="p-8">
                    <!-- Modal content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample product data
        const products = [
            {
                id: 1,
                name: "Brahmi Hair Oil",
                category: "oils",
                price: 899,
                originalPrice: 1099,
                rating: 4.8,
                reviews: 189,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ERose Serum%3C/text%3E%3C/svg%3E",
                description: "Hydrating rose serum with hyaluronic acid for glowing skin.",
                benefits: ["skin"],
                isNew: true,
                inStock: true
            },
            {
                id: 15,
                name: "Arjuna Churna",
                category: "powders",
                price: 459,
                originalPrice: 559,
                rating: 4.5,
                reviews: 87,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EArjuna Churna%3C/text%3E%3C/svg%3E",
                description: "Heart-healthy Arjuna bark powder for cardiovascular support.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 16,
                name: "Jasmine Hair Oil",
                category: "oils",
                price: 629,
                originalPrice: 729,
                rating: 4.7,
                reviews: 145,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EJasmine Oil%3C/text%3E%3C/svg%3E",
                description: "Fragrant jasmine oil for hair nourishment and aromatherapy.",
                benefits: ["hair", "stress"],
                isNew: false,
                inStock: true
            },
            {
                id: 17,
                name: "Weight Loss Tea",
                category: "teas",
                price: 589,
                originalPrice: 689,
                rating: 4.3,
                reviews: 156,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EWeight Loss Tea%3C/text%3E%3C/svg%3E",
                description: "Metabolic support tea with green tea and garcinia.",
                benefits: ["digestion"],
                isNew: false,
                inStock: true
            },
            {
                id: 18,
                name: "Giloy Tablets",
                category: "supplements",
                price: 489,
                originalPrice: 589,
                rating: 4.6,
                reviews: 201,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EGiloy Tablets%3C/text%3E%3C/svg%3E",
                description: "Immunity booster with pure Giloy extract tablets.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 19,
                name: "Sandalwood Face Pack",
                category: "skincare",
                price: 399,
                originalPrice: 499,
                rating: 4.5,
                reviews: 134,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESandalwood Pack%3C/text%3E%3C/svg%3E",
                description: "Cooling sandalwood face pack for sensitive skin.",
                benefits: ["skin"],
                isNew: false,
                inStock: true
            },
            {
                id: 20,
                name: "Brahmi Powder",
                category: "powders",
                price: 379,
                originalPrice: 479,
                rating: 4.7,
                reviews: 167,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EBrahmi Powder%3C/text%3E%3C/svg%3E",
                description: "Memory enhancing Brahmi powder for cognitive health.",
                benefits: ["stress"],
                isNew: false,
                inStock: true
            },
            {
                id: 21,
                name: "Sesame Hair Oil",
                category: "oils",
                price: 529,
                originalPrice: 629,
                rating: 4.4,
                reviews: 98,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESesame Oil%3C/text%3E%3C/svg%3E",
                description: "Traditional sesame oil enriched with herbs for hair growth.",
                benefits: ["hair"],
                isNew: false,
                inStock: true
            },
            {
                id: 22,
                name: "Sleep Tea",
                category: "teas",
                price: 449,
                originalPrice: 549,
                rating: 4.8,
                reviews: 223,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESleep Tea%3C/text%3E%3C/svg%3E",
                description: "Relaxing bedtime tea with chamomile and passion flower.",
                benefits: ["stress"],
                isNew: true,
                inStock: true
            },
            {
                id: 23,
                name: "Turmeric Tablets",
                category: "supplements",
                price: 369,
                originalPrice: 469,
                rating: 4.5,
                reviews: 189,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ETurmeric Tablets%3C/text%3E%3C/svg%3E",
                description: "Anti-inflammatory turmeric extract with black pepper.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 24,
                name: "Aloe Vera Gel",
                category: "skincare",
                price: 249,
                originalPrice: 349,
                rating: 4.6,
                reviews: 267,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EAloe Vera Gel%3C/text%3E%3C/svg%3E",
                description: "Pure aloe vera gel for skin healing and moisturization.",
                benefits: ["skin"],
                isNew: false,
                inStock: true
            },
            {
                id: 25,
                name: "Brahmi Hair Oil",
                category: "oils",
                price: 899,
                originalPrice: 1099,
                rating: 4.8,
                reviews: 189,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ERose Serum%3C/text%3E%3C/svg%3E",
                description: "Hydrating rose serum with hyaluronic acid for glowing skin.",
                benefits: ["skin"],
                isNew: true,
                inStock: true
            },
            {
                id: 26,
                name: "Arjuna Churna",
                category: "powders",
                price: 459,
                originalPrice: 559,
                rating: 4.5,
                reviews: 87,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EArjuna Churna%3C/text%3E%3C/svg%3E",
                description: "Heart-healthy Arjuna bark powder for cardiovascular support.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 27,
                name: "Jasmine Hair Oil",
                category: "oils",
                price: 629,
                originalPrice: 729,
                rating: 4.7,
                reviews: 145,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EJasmine Oil%3C/text%3E%3C/svg%3E",
                description: "Fragrant jasmine oil for hair nourishment and aromatherapy.",
                benefits: ["hair", "stress"],
                isNew: false,
                inStock: true
            },
            {
                id: 28,
                name: "Weight Loss Tea",
                category: "teas",
                price: 589,
                originalPrice: 689,
                rating: 4.3,
                reviews: 156,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EWeight Loss Tea%3C/text%3E%3C/svg%3E",
                description: "Metabolic support tea with green tea and garcinia.",
                benefits: ["digestion"],
                isNew: false,
                inStock: true
            },
            {
                id: 29,
                name: "Giloy Tablets",
                category: "supplements",
                price: 489,
                originalPrice: 589,
                rating: 4.6,
                reviews: 201,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EGiloy Tablets%3C/text%3E%3C/svg%3E",
                description: "Immunity booster with pure Giloy extract tablets.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 30,
                name: "Sandalwood Face Pack",
                category: "skincare",
                price: 399,
                originalPrice: 499,
                rating: 4.5,
                reviews: 134,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESandalwood Pack%3C/text%3E%3C/svg%3E",
                description: "Cooling sandalwood face pack for sensitive skin.",
                benefits: ["skin"],
                isNew: false,
                inStock: true
            },
            {
                id: 31,
                name: "Brahmi Powder",
                category: "powders",
                price: 379,
                originalPrice: 479,
                rating: 4.7,
                reviews: 167,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EBrahmi Powder%3C/text%3E%3C/svg%3E",
                description: "Memory enhancing Brahmi powder for cognitive health.",
                benefits: ["stress"],
                isNew: false,
                inStock: true
            },
            {
                id: 32,
                name: "Sesame Hair Oil",
                category: "oils",
                price: 529,
                originalPrice: 629,
                rating: 4.4,
                reviews: 98,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESesame Oil%3C/text%3E%3C/svg%3E",
                description: "Traditional sesame oil enriched with herbs for hair growth.",
                benefits: ["hair"],
                isNew: false,
                inStock: true
            },
            {
                id: 33,
                name: "Sleep Tea",
                category: "teas",
                price: 449,
                originalPrice: 549,
                rating: 4.8,
                reviews: 223,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESleep Tea%3C/text%3E%3C/svg%3E",
                description: "Relaxing bedtime tea with chamomile and passion flower.",
                benefits: ["stress"],
                isNew: true,
                inStock: true
            },
            {
                id: 34,
                name: "Turmeric Tablets",
                category: "supplements",
                price: 369,
                originalPrice: 469,
                rating: 4.5,
                reviews: 189,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ETurmeric Tablets%3C/text%3E%3C/svg%3E",
                description: "Anti-inflammatory turmeric extract with black pepper.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 35,
                name: "Aloe Vera Gel",
                category: "skincare",
                price: 249,
                originalPrice: 349,
                rating: 4.6,
                reviews: 267,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EAloe Vera Gel%3C/text%3E%3C/svg%3E",
                description: "Pure aloe vera gel for skin healing and moisturization.",
                benefits: ["skin"],
                isNew: false,
                inStock: true
            },
            {
                id: 36,
                name: "Brahmi Hair Oil",
                category: "oils",
                price: 899,
                originalPrice: 1099,
                rating: 4.8,
                reviews: 189,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ERose Serum%3C/text%3E%3C/svg%3E",
                description: "Hydrating rose serum with hyaluronic acid for glowing skin.",
                benefits: ["skin"],
                isNew: true,
                inStock: true
            },
            {
                id: 37,
                name: "Arjuna Churna",
                category: "powders",
                price: 459,
                originalPrice: 559,
                rating: 4.5,
                reviews: 87,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EArjuna Churna%3C/text%3E%3C/svg%3E",
                description: "Heart-healthy Arjuna bark powder for cardiovascular support.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 38,
                name: "Jasmine Hair Oil",
                category: "oils",
                price: 629,
                originalPrice: 729,
                rating: 4.7,
                reviews: 145,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EJasmine Oil%3C/text%3E%3C/svg%3E",
                description: "Fragrant jasmine oil for hair nourishment and aromatherapy.",
                benefits: ["hair", "stress"],
                isNew: false,
                inStock: true
            },
            {
                id: 39,
                name: "Weight Loss Tea",
                category: "teas",
                price: 589,
                originalPrice: 689,
                rating: 4.3,
                reviews: 156,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EWeight Loss Tea%3C/text%3E%3C/svg%3E",
                description: "Metabolic support tea with green tea and garcinia.",
                benefits: ["digestion"],
                isNew: false,
                inStock: true
            },
            {
                id: 40,
                name: "Giloy Tablets",
                category: "supplements",
                price: 489,
                originalPrice: 589,
                rating: 4.6,
                reviews: 201,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EGiloy Tablets%3C/text%3E%3C/svg%3E",
                description: "Immunity booster with pure Giloy extract tablets.",
                benefits: ["immunity"],
                isNew: false,
                inStock: true
            },
            {
                id: 41,
                name: "Sandalwood Face Pack",
                category: "skincare",
                price: 399,
                originalPrice: 499,
                rating: 4.5,
                reviews: 134,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESandalwood Pack%3C/text%3E%3C/svg%3E",
                description: "Cooling sandalwood face pack for sensitive skin.",
                benefits: ["skin"],
                isNew: false,
                inStock: true
            },
            {
                id: 42,
                name: "Brahmi Powder",
                category: "powders",
                price: 379,
                originalPrice: 479,
                rating: 4.7,
                reviews: 167,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EBrahmi Powder%3C/text%3E%3C/svg%3E",
                description: "Memory enhancing Brahmi powder for cognitive health.",
                benefits: ["stress"],
                isNew: false,
                inStock: true
            },
            {
                id: 43,
                name: "Sesame Hair Oil",
                category: "oils",
                price: 529,
                originalPrice: 629,
                rating: 4.4,
                reviews: 98,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESesame Oil%3C/text%3E%3C/svg%3E",
                description: "Traditional sesame oil enriched with herbs for hair growth.",
                benefits: ["hair"],
                isNew: false,
                inStock: true
            },
            {
                id: 44,
                name: "Sleep Tea",
                category: "teas",
                price: 449,
                originalPrice: 549,
                rating: 4.8,
                reviews: 223,
                image: "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3ESleep Tea%3C/text%3E%3C/svg%3E",
                description: "Relaxing bedtime tea with chamomile and passion flower.",
                benefits: ["stress"],
                isNew: true,
                inStock: true
            }
        ];

        let filteredProducts = [...products];
        let currentView = 'grid';
        let currentPage = 1;
        const pageSize = 12;

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            renderProducts();
            setupEventListeners();
        });

        function setupEventListeners() {
            // Category filters
            document.querySelectorAll('.category-filter').forEach(button => {
                button.addEventListener('click', function() {
                    const category = this.dataset.category;
                    
                    // Update active state
                    document.querySelectorAll('.category-filter').forEach(btn => {
                        btn.classList.remove('filter-active');
                        btn.classList.add('bg-gray-200', 'text-ayur-green');
                        btn.classList.remove('bg-ayur-green', 'text-white');
                    });
                    
                    this.classList.add('filter-active');
                    this.classList.remove('bg-gray-200', 'text-ayur-green');
                    this.classList.add('bg-ayur-green', 'text-white');
                    
                    filterProducts();
                });
            });

            // Price slider
            const priceSlider = document.getElementById('price-slider');
            const maxPriceSpan = document.getElementById('max-price');
            
            priceSlider.addEventListener('input', function() {
                maxPriceSpan.textContent = this.value;
                filterProducts();
            });

            // Sort dropdown
            document.getElementById('sort-select').addEventListener('change', function() {
                sortProducts(this.value);
            });

            // Benefit filters
            document.querySelectorAll('.benefit-filter').forEach(checkbox => {
                checkbox.addEventListener('change', filterProducts);
            });

            // View toggles
            document.getElementById('grid-view').addEventListener('click', function() {
                currentView = 'grid';
                updateViewButtons();
                renderProducts();
            });

            document.getElementById('list-view').addEventListener('click', function() {
                currentView = 'list';
                updateViewButtons();
                renderProducts();
            });

            // Clear filters
            document.getElementById('clear-filters').addEventListener('click', clearAllFilters);
        }

        function filterProducts() {
            const activeCategory = document.querySelector('.category-filter.filter-active').dataset.category;
            const maxPrice = parseInt(document.getElementById('price-slider').value);
            const selectedBenefits = Array.from(document.querySelectorAll('.benefit-filter:checked'))
                .map(cb => cb.dataset.benefit);

            filteredProducts = products.filter(product => {
                // Category filter
                if (activeCategory !== 'all' && product.category !== activeCategory) {
                    return false;
                }

                // Price filter
                if (product.price > maxPrice) {
                    return false;
                }

                // Benefits filter
                if (selectedBenefits.length > 0) {
                    const hasMatchingBenefit = selectedBenefits.some(benefit => 
                        product.benefits.includes(benefit)
                    );
                    if (!hasMatchingBenefit) {
                        return false;
                    }
                }

                return true;
            });

            renderProducts();
            updateResultsCount();
        }

        function sortProducts(sortType) {
            switch(sortType) {
                case 'name':
                    filteredProducts.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                case 'price-low':
                    filteredProducts.sort((a, b) => a.price - b.price);
                    break;
                case 'price-high':
                    filteredProducts.sort((a, b) => b.price - a.price);
                    break;
                case 'rating':
                    filteredProducts.sort((a, b) => b.rating - a.rating);
                    break;
                case 'newest':
                    filteredProducts.sort((a, b) => b.isNew - a.isNew);
                    break;
            }
            renderProducts();
        }

        function renderProducts() {
            const container = document.getElementById('products-container');
            const startIndex = (currentPage - 1) * pageSize;
            const endIndex = startIndex + pageSize;
            const productsToShow = filteredProducts.slice(startIndex, endIndex);

            if (currentView === 'grid') {
                container.className = 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8';
                container.innerHTML = productsToShow.map(product => createProductCard(product)).join('');
            } else {
                container.className = 'space-y-6';
                container.innerHTML = productsToShow.map(product => createProductListItem(product)).join('');
            }

            // Add event listeners to product cards
            addProductEventListeners();
            updateResultsCount();
            renderPagination();
        }

        function createProductCard(product) {
            const discount = Math.round((1 - product.price / product.originalPrice) * 100);
            
            return `
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift product-card" data-product-id="${product.id}">
                    <div class="relative">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 flex flex-col space-y-2">
                            ${product.isNew ? '<span class="bg-ayur-gold text-white px-3 py-1 rounded-full text-xs font-medium">New</span>' : ''}
                            ${discount > 0 ? `<span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">-${discount}%</span>` : ''}
                        </div>
                        <div class="absolute top-4 right-4 flex space-x-2">
                            <button class="wishlist-btn w-8 h-8 bg-white bg-opacity-80 rounded-full flex items-center justify-center hover:bg-opacity-100 transition duration-300">
                                <svg class="w-4 h-4 text-ayur-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="quick-view-btn w-8 h-8 bg-white bg-opacity-80 rounded-full flex items-center justify-center hover:bg-opacity-100 transition duration-300">
                                <svg class="w-4 h-4 text-ayur-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                        ${!product.inStock ? '<div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center"><span class="text-white font-medium">Out of Stock</span></div>' : ''}
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">${product.name}</h3>
                        <p class="text-ayur-brown text-sm mb-3 line-clamp-2">${product.description}</p>
                        
                        <div class="flex items-center mb-3">
                            <div class="flex text-ayur-gold text-sm">
                                ${'★'.repeat(Math.floor(product.rating))}${'☆'.repeat(5 - Math.floor(product.rating))}
                            </div>
                            <span class="text-ayur-brown text-sm ml-2">${product.rating} (${product.reviews})</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-2">
                                <span class="font-bold text-ayur-green text-lg">₹${product.price}</span>
                                ${product.originalPrice > product.price ? `<span class="text-gray-500 text-sm line-through">₹${product.originalPrice}</span>` : ''}
                            </div>
                            <a href="/product">
                                <button class="add-to-cart-btn bg-ayur-green text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300 ${!product.inStock ? 'opacity-50 cursor-not-allowed' : ''}" ${!product.inStock ? 'disabled' : ''}>
                                    ${product.inStock ? 'View Product' : 'Out of Stock'}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            `;
        }

        function createProductListItem(product) {
            const discount = Math.round((1 - product.price / product.originalPrice) * 100);
            
            return `
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift product-card flex" data-product-id="${product.id}">
                    <div class="relative w-64 flex-shrink-0">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 flex flex-col space-y-2">
                            ${product.isNew ? '<span class="bg-ayur-gold text-white px-3 py-1 rounded-full text-xs font-medium">New</span>' : ''}
                            ${discount > 0 ? `<span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">-${discount}%</span>` : ''}
                        </div>
                        ${!product.inStock ? '<div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center"><span class="text-white font-medium">Out of Stock</span></div>' : ''}
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-3">${product.name}</h3>
                            <p class="text-ayur-brown mb-4">${product.description}</p>
                            
                            <div class="flex items-center mb-4">
                                <div class="flex text-ayur-gold">
                                    ${'★'.repeat(Math.floor(product.rating))}${'☆'.repeat(5 - Math.floor(product.rating))}
                                </div>
                                <span class="text-ayur-brown ml-2">${product.rating} (${product.reviews} reviews)</span>
                            </div>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                ${product.benefits.map(benefit => `<span class="bg-ayur-cream text-ayur-green px-3 py-1 rounded-full text-sm">${benefit}</span>`).join('')}
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-3">
                                <span class="font-bold text-ayur-green text-2xl">₹${product.price}</span>
                                ${product.originalPrice > product.price ? `<span class="text-gray-500 line-through">₹${product.originalPrice}</span>` : ''}
                            </div>
                            <div class="flex space-x-3">
                                <button class="wishlist-btn p-2 border border-ayur-sage rounded-lg hover:bg-ayur-green hover:text-white hover:border-ayur-green transition duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <button class="quick-view-btn p-2 border border-ayur-sage rounded-lg hover:bg-ayur-green hover:text-white hover:border-ayur-green transition duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <a href="/product">
                                    <button class="add-to-cart-btn bg-ayur-green text-white px-6 py-2 rounded-lg hover:bg-opacity-90 transition duration-300 ${!product.inStock ? 'opacity-50 cursor-not-allowed' : ''}" ${!product.inStock ? 'disabled' : ''}>
                                        ${product.inStock ? 'View Product' : 'Out of Stock'}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }

        function addProductEventListeners() {
            // Add to cart buttons
            document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
                if (!btn.disabled) {
                    btn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const productCard = this.closest('.product-card');
                        const productId = productCard.dataset.productId;
                        addToCart(productId);
                        
                        // Visual feedback
                        const originalText = this.textContent;
                        this.textContent = 'Added!';
                        this.classList.add('bg-ayur-gold');
                        
                        setTimeout(() => {
                            this.textContent = originalText;
                            this.classList.remove('bg-ayur-gold');
                        }, 2000);
                    });
                }
            });

            // Wishlist buttons
            document.querySelectorAll('.wishlist-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    this.classList.toggle('text-red-500');
                    
                    // Visual feedback
                    if (this.classList.contains('text-red-500')) {
                        this.innerHTML = `
                            <svg class="w-4 h-4 text-red-500" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        `;
                    } else {
                        this.innerHTML = `
                            <svg class="w-4 h-4 text-ayur-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        `;
                    }
                });
            });

            // Quick view buttons
            document.querySelectorAll('.quick-view-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const productCard = this.closest('.product-card');
                    const productId = productCard.dataset.productId;
                    showQuickView(productId);
                });
            });
        }

        function updateViewButtons() {
            const gridBtn = document.getElementById('grid-view');
            const listBtn = document.getElementById('list-view');
            
            if (currentView === 'grid') {
                gridBtn.classList.add('bg-ayur-green', 'text-white');
                gridBtn.classList.remove('bg-gray-200', 'text-ayur-green');
                listBtn.classList.add('bg-gray-200', 'text-ayur-green');
                listBtn.classList.remove('bg-ayur-green', 'text-white');
            } else {
                listBtn.classList.add('bg-ayur-green', 'text-white');
                listBtn.classList.remove('bg-gray-200', 'text-ayur-green');
                gridBtn.classList.add('bg-gray-200', 'text-ayur-green');
                gridBtn.classList.remove('bg-ayur-green', 'text-white');
            }
        }

        function clearAllFilters() {
            // Reset category filter
            document.querySelectorAll('.category-filter').forEach(btn => {
                btn.classList.remove('filter-active', 'bg-ayur-green', 'text-white');
                btn.classList.add('bg-gray-200', 'text-ayur-green');
            });
            document.querySelector('[data-category="all"]').classList.add('filter-active', 'bg-ayur-green', 'text-white');
            document.querySelector('[data-category="all"]').classList.remove('bg-gray-200', 'text-ayur-green');
            
            // Reset price slider
            const priceSlider = document.getElementById('price-slider');
            priceSlider.value = 2000;
            document.getElementById('max-price').textContent = '2000';
            
            // Reset benefit checkboxes
            document.querySelectorAll('.benefit-filter').forEach(cb => {
                cb.checked = false;
            });
            
            // Reset sort
            document.getElementById('sort-select').value = 'name';
            
            // Refilter products
            filterProducts();
        }

        function updateResultsCount() {
            const startIndex = (currentPage - 1) * pageSize + 1;
            const endIndex = Math.min(currentPage * pageSize, filteredProducts.length);
            document.getElementById('results-count').textContent = `${startIndex}-${endIndex}`;
            document.getElementById('total-count').textContent = filteredProducts.length;
        }

        function renderPagination() {
            const totalPages = Math.ceil(filteredProducts.length / pageSize);
            const paginationContainer = document.querySelector('.pagination-container');
            if (!paginationContainer) return;

            let html = '';

            // Previous button
            html += `<button class="pagination-btn px-3 py-2 border border-ayur-sage rounded-lg hover:bg-ayur-green hover:text-white hover:border-ayur-green transition duration-300 ${currentPage === 1 ? 'opacity-50 cursor-not-allowed' : ''}" data-page="${currentPage - 1}" ${currentPage === 1 ? 'disabled' : ''}>Previous</button>`;

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                html += `<button class="pagination-btn px-3 py-2 border border-ayur-sage rounded-lg hover:bg-ayur-green hover:text-white hover:border-ayur-green transition duration-300 ${currentPage === i ? 'bg-ayur-green text-white' : ''}" data-page="${i}">${i}</button>`;
            }

            // Next button
            html += `<button class="pagination-btn px-3 py-2 border border-ayur-sage rounded-lg hover:bg-ayur-green hover:text-white hover:border-ayur-green transition duration-300 ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : ''}" data-page="${currentPage + 1}" ${currentPage === totalPages ? 'disabled' : ''}>Next</button>`;

            paginationContainer.innerHTML = html;

            // Add event listeners
            document.querySelectorAll('.pagination-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const page = parseInt(this.dataset.page);
                    if (page) {
                        currentPage = page;
                        renderProducts();
                    }
                });
            });
        }

        function addToCart(productId) {
            // Update cart counter
            const cartCounter = document.getElementById('cart-count');
            const currentCount = parseInt(cartCounter.textContent);
            cartCounter.textContent = currentCount + 1;
            
            console.log(`Added product ${productId} to cart`);
        }

        function showQuickView(productId) {
            const product = products.find(p => p.id == productId);
            if (!product) return;
            
            const modal = document.getElementById('quick-view-modal');
            const modalContent = document.getElementById('modal-content');
            const discount = Math.round((1 - product.price / product.originalPrice) * 100);
            
            modalContent.innerHTML = `
                <div class="flex justify-between items-start mb-6">
                    <h2 class="font-playfair text-3xl font-bold text-ayur-green">${product.name}</h2>
                    <button onclick="closeQuickView()" class="text-gray-500 hover:text-ayur-green text-2xl">&times;</button>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="relative">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-80 object-cover rounded-lg">
                        <div class="absolute top-4 left-4 flex flex-col space-y-2">
                            ${product.isNew ? '<span class="bg-ayur-gold text-white px-3 py-1 rounded-full text-xs font-medium">New</span>' : ''}
                            ${discount > 0 ? `<span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">-${discount}%</span>` : ''}
                        </div>
                        ${!product.inStock ? '<div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg"><span class="text-white font-medium text-lg">Out of Stock</span></div>' : ''}
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center mb-4">
                                <div class="flex text-ayur-gold text-lg">
                                    ${'★'.repeat(Math.floor(product.rating))}${'☆'.repeat(5 - Math.floor(product.rating))}
                                </div>
                                <span class="text-ayur-brown ml-2">${product.rating} (${product.reviews} reviews)</span>
                            </div>
                            
                            <p class="text-ayur-brown text-lg leading-relaxed mb-6">${product.description}</p>
                            
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-ayur-green font-medium mr-2">Benefits:</span>
                                ${product.benefits.map(benefit => `<span class="bg-ayur-cream text-ayur-green px-3 py-1 rounded-full text-sm capitalize">${benefit}</span>`).join('')}
                            </div>
                        </div>
                        
                        <div class="border-t pt-6">
                            <div class="flex items-center space-x-4 mb-6">
                                <span class="font-bold text-ayur-green text-3xl">₹${product.price}</span>
                                ${product.originalPrice > product.price ? `<span class="text-gray-500 text-xl line-through">₹${product.originalPrice}</span>` : ''}
                                ${discount > 0 ? `<span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm font-medium">Save ₹${product.originalPrice - product.price}</span>` : ''}
                            </div>
                            
                            <div class="flex space-x-4">
                                <a href="/product" class="flex-1">
                                    <button class="w-full bg-ayur-green text-white py-3 px-6 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium ${!product.inStock ? 'opacity-50 cursor-not-allowed' : ''}" ${!product.inStock ? 'disabled' : ''}>
                                        ${product.inStock ? 'View Product' : 'Out of Stock'}
                                    </button>
                                </a>
                            </div>
                            
                            <div class="mt-6 p-4 bg-ayur-cream rounded-lg">
                                <div class="flex items-center space-x-4 text-sm text-ayur-brown">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                        </svg>
                                        Free Shipping
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Money Back Guarantee
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeQuickView() {
            const modal = document.getElementById('quick-view-modal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('quick-view-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeQuickView();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeQuickView();
            }
        });
    </script>
@include('includes.footer')
</body>
</html>