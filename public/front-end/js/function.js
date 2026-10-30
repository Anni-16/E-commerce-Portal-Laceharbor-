// ABOUT US INTERACTIVE TIMELINE
document.addEventListener("DOMContentLoaded", function () {
    const yearButtons = document.querySelectorAll(".timeline-year-btn");
    const contentCards = document.querySelectorAll(".timeline-content-card");

    yearButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            const targetYear = this.getAttribute("data-year");

            // Remove active from all buttons
            yearButtons.forEach((b) => b.classList.remove("active"));
            // Add active to current button
            this.classList.add("active");

            // Fade out and deactivate current active content card
            contentCards.forEach((card) => {
                if (card.classList.contains("active")) {
                    card.classList.remove("active");
                }
            });

            // Activate target card
            const targetCard = document.getElementById(
                `timeline-${targetYear}`,
            );
            if (targetCard) {
                targetCard.classList.add("active");
            }
        });
    });
});

// Product Filtering - New Arrivals & Category Page
const grid = document.getElementById("productsGrid");

const allCards = Array.from(grid.querySelectorAll(".product-card"));

// Category tab filter
function filterCat(btn, cat) {
    document
        .querySelectorAll(".cat-tab")
        .forEach((t) => t.classList.remove("active"));

    btn.classList.add("active");

    let count = 0;

    allCards.forEach((card) => {
        const show = cat === "all" || card.dataset.cat === cat;

        card.style.display = show ? "" : "none";

        if (show) count++;
    });

    document.getElementById("visibleCount").textContent = count;
}

// Sort
document.getElementById("sortSelect").addEventListener("change", function () {
    const val = this.value;

    const visible = allCards.filter((c) => c.style.display !== "none");

    if (val.includes("A to Z")) {
        visible.sort((a, b) =>
            a
                .querySelector("h4")
                .textContent.localeCompare(b.querySelector("h4").textContent),
        );
    } else if (val.includes("Z to A")) {
        visible.sort((a, b) =>
            b
                .querySelector("h4")
                .textContent.localeCompare(a.querySelector("h4").textContent),
        );
    }

    visible.forEach((c) => grid.appendChild(c));
});

// Grid / List toggle
document.getElementById("gridBtn").addEventListener("click", function () {
    grid.classList.remove("list-view");

    this.classList.add("active");

    document.getElementById("listBtn").classList.remove("active");
});

document.getElementById("listBtn").addEventListener("click", function () {
    grid.classList.add("list-view");

    this.classList.add("active");

    document.getElementById("gridBtn").classList.remove("active");
});

// Pagination
document
    .querySelectorAll(".pagination button:not(.prev-next)")
    .forEach((btn) => {
        btn.addEventListener("click", function () {
            document
                .querySelectorAll(".pagination button")
                .forEach((b) => b.classList.remove("active"));

            this.classList.add("active");
        });
    });

// TRACK ORDER SIMULATOR
document.addEventListener("DOMContentLoaded", function () {
    const trackForm = document.getElementById("luxuryTrackForm");
    const resultsBox = document.getElementById("trackResultsBox");

    // Output Elements
    const outOrderId = document.getElementById("outOrderId");
    const outStatus = document.getElementById("outStatus");
    const outCarrier = document.getElementById("outCarrier");
    const outEstDate = document.getElementById("outEstDate");
    const progressBar = document.getElementById("timelineProgressBar");
    const timelineSteps = document.querySelectorAll(".timeline-step");
    const itemsContainer = document.getElementById("trackItemsList");

    // Mock Items List
    const mockOrderItems = [
        { name: "Floral Wrap Dress", qty: 1, price: 1299 },
        { name: "Padded Comfort Bra", qty: 2, price: 1998 },
    ];

    if (trackForm) {
        trackForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const orderIdVal = document
                .getElementById("trackOrderId")
                .value.trim();
            const emailVal = document.getElementById("trackEmail").value.trim();

            if (!orderIdVal || !emailVal) {
                return;
            }

            // Simulate tracking lookup
            displayTracking(orderIdVal);
        });
    }

    function displayTracking(orderId) {
        // Upper case order ID
        const cleanId = orderId.toUpperCase();
        if (outOrderId) outOrderId.textContent = cleanId;

        // Determine Status based on Order ID last character
        // Even numbers -> Delivered
        // Odd numbers -> Shipped
        // Letters/Special -> Processing/In Transit
        const lastChar = cleanId.slice(-1);
        const lastDigit = parseInt(lastChar);

        let status = "Processing";
        let progress = 33; // 33% (Processing)
        let carrier = "Delhivery Express";
        let estDate = "";

        const today = new Date();
        const option = { month: "short", day: "numeric", year: "numeric" };

        if (!isNaN(lastDigit)) {
            if (lastDigit % 2 === 0) {
                status = "Delivered";
                progress = 100;
                carrier = "Blue Dart Express";
                // Delivered yesterday
                const delDate = new Date(today);
                delDate.setDate(today.getDate() - 1);
                estDate =
                    delDate.toLocaleDateString("en-US", option) +
                    " (Completed)";
            } else {
                status = "Shipped";
                progress = 66;
                carrier = "Expressbees";
                // Delivered tomorrow
                const shipDate = new Date(today);
                shipDate.setDate(today.getDate() + 1);
                estDate = shipDate.toLocaleDateString("en-US", option);
            }
        } else {
            status = "Processing";
            progress = 33;
            carrier = "LACEHARBOR Atelier Courier";
            // Delivered in 3 days
            const procDate = new Date(today);
            procDate.setDate(today.getDate() + 3);
            estDate = procDate.toLocaleDateString("en-US", option);
        }

        // Set Text Outputs
        if (outStatus) outStatus.textContent = status;
        if (outCarrier) outCarrier.textContent = carrier;
        if (outEstDate) outEstDate.textContent = estDate;

        // Update Progress Bar width / height (for mobile)
        const isMobile = window.innerWidth <= 768;
        if (progressBar) {
            if (isMobile) {
                progressBar.style.width = "3px";
                progressBar.style.height = `${progress}%`;
            } else {
                progressBar.style.height = "3px";
                progressBar.style.width = `${progress}%`;
            }
        }

        // Reset Timeline classes
        timelineSteps.forEach((step) => {
            step.classList.remove("active", "current");
        });

        // Activate Steps based on progress
        if (progress >= 33) {
            timelineSteps[0].classList.add("active"); // Placed
            timelineSteps[1].classList.add("current"); // Processing
        }
        if (progress >= 66) {
            timelineSteps[1].classList.remove("current");
            timelineSteps[1].classList.add("active"); // Processing active
            timelineSteps[2].classList.add("current"); // Shipped current
        }
        if (progress >= 100) {
            timelineSteps[2].classList.remove("current");
            timelineSteps[2].classList.add("active"); // Shipped active
            timelineSteps[3].classList.add("active"); // Delivered active
        }

        // Render mock items list
        if (itemsContainer) {
            itemsContainer.innerHTML = mockOrderItems
                .map(
                    (item) => `
                <div class="track-item-row">
                    <div>
                        <strong style="color:var(--black);font-size:0.95rem;">${item.name}</strong>
                        <p style="margin:4px 0 0 0;color:var(--gray);font-size:0.85rem;">Qty: ${item.qty}</p>
                    </div>
                    <span style="font-weight:600;font-size:0.95rem;color:var(--black);">₹${item.price.toLocaleString("en-IN")}</span>
                </div>
            `,
                )
                .join("");
        }

        // Reveal results container
        if (resultsBox) resultsBox.classList.add("active");
    }
});

// RETURNS WORKFLOW HANDLER
document.addEventListener("DOMContentLoaded", function () {
    const returnsForm = document.getElementById("returnsWorkflowForm");
    const nextBtn = document.getElementById("returnsNextBtn");
    const submitBtn = document.getElementById("returnsSubmitBtn");

    const step1 = document.getElementById("returnsStep1");
    const step2 = document.getElementById("returnsStep2");
    const step3 = document.getElementById("returnsStep3");

    const orderIdInput = document.getElementById("retOrderId");
    const emailInput = document.getElementById("retEmail");
    const itemGrid = document.getElementById("returnsItemsList");
    const displayOrderId = document.getElementById("successOrderId");
    const displayBarcode = document.getElementById("successBarcode");

    // Mock Items DB by Order ID suffix (simulating order data lookups)
    const mockOrderItems = [
        {
            id: 1,
            name: "Silk Lace Robe",
            size: "M",
            color: "Black",
            price: 2999,
            img: "https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=200&q=80",
        },
        {
            id: 2,
            name: "Floral Wrap Dress",
            size: "S",
            color: "Floral Blue",
            price: 1299,
            img: "https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=200&q=80",
        },
        {
            id: 3,
            name: "Padded Comfort Bra",
            size: "34B",
            color: "Nude",
            price: 999,
            img: "https://images.unsplash.com/photo-1606760227091-3dd870d97f1d?w=200&q=80",
        },
    ];

    if (nextBtn) {
        nextBtn.addEventListener("click", function () {
            // Validate step 1 inputs
            if (!orderIdInput.value.trim() || !emailInput.value.trim()) {
                alert("Please fill in both Order ID and Email Address.");
                return;
            }

            // Simulate loading order items
            renderOrderItems();

            // Transition to Step 2
            step1.classList.remove("active");
            step2.classList.add("active");
        });
    }

    if (submitBtn) {
        submitBtn.addEventListener("click", function (e) {
            e.preventDefault();

            // Validate item selection in step 2
            const checkedBoxes = step2.querySelectorAll(
                'input[type="checkbox"]:checked',
            );
            if (checkedBoxes.length === 0) {
                alert("Please select at least one item to return.");
                return;
            }

            // Populate Success Info
            const orderId = orderIdInput.value.toUpperCase().trim();
            if (displayOrderId) displayOrderId.textContent = orderId;
            if (displayBarcode) {
                // Generate simulated numerical barcode string
                const cleanIdNum = orderId.replace(/[^0-9]/g, "");
                displayBarcode.textContent = `|||${cleanIdNum || "930128"}8391204|||`;
            }

            // Transition to Step 3
            step2.classList.remove("active");
            step3.classList.add("active");
        });
    }

    function renderOrderItems() {
        if (!itemGrid) return;

        // Always return the mock items for interactive demonstration
        itemGrid.innerHTML = mockOrderItems
            .map(
                (item) => `
            <div class="returns-item-row">
                <input type="checkbox" id="item-${item.id}" value="${item.id}" />
                <img src="${item.img}" alt="${item.name}" />
                <div class="returns-item-details">
                    <h5>${item.name}</h5>
                    <p>Size: ${item.size} | Color: ${item.color}</p>
                </div>
                <div class="returns-item-price">₹${item.price.toLocaleString("en-IN")}</div>
            </div>
        `,
            )
            .join("");
    }
});
