<script>
        // Sales Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Sales',
                    data: [12000, 19000, 15000, 25000, 22000, 30000, 28000],
                    borderColor: '#4a7c59',
                    backgroundColor: 'rgba(74, 124, 89, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return '₹' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });

        // Category Chart
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Herbal Oils', 'Herbal Teas', 'Churnas', 'Skincare', 'Supplements'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        '#4a7c59',
                        '#87a96b',
                        '#d4a574',
                        '#8b4513',
                        '#2d4a35'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            usePointStyle: true
                        }
                    }
                }
            }
        });

        // Navigation functionality
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('nav a').forEach(l => {
                    l.classList.remove('active-nav', 'text-white');
                    l.classList.add('text-ayur-green');
                });
                
                // Add active class to clicked link
                this.classList.add('active-nav', 'text-white');
                this.classList.remove('text-ayur-green');
            });
        });

        // Simulate real-time updates
        setInterval(() => {
            // Update notification badge randomly
            const notifications = document.querySelector('.bg-white.p-3.rounded-lg.card-shadow.hover-lift');
            if (Math.random() > 0.7) {
                notifications.classList.add('animate-pulse');
                setTimeout(() => {
                    notifications.classList.remove('animate-pulse');
                }, 2000);
            }
        }, 5000);

        // Interactive buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent.includes('Add Product') || this.textContent.includes('Add New Product')) {
                    alert('Redirecting to Add Product form...');
                } else if (this.textContent.includes('Schedule Consultation')) {
                    alert('Opening consultation scheduler...');
                } else if (this.textContent.includes('Generate Report')) {
                    alert('Generating comprehensive analytics report...');
                } else if (this.textContent.includes('Update Inventory')) {
                    alert('Opening inventory management system...');
                }
            });
        });
    </script>

    @include('includes.modals.order-details')
</body>
</html>