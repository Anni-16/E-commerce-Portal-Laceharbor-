/* Zentic Ecommerce - demo data layer (localStorage-backed, client-side only) */
(function (window) {
  "use strict";

  var LS = {
    products: "zenticEcomProducts",
    categories: "zenticEcomCategories",
    orders: "zenticEcomOrders",
    customers: "zenticEcomCustomers",
    reviews: "zenticEcomReviews",
    referrals: "zenticEcomReferrals",
    settings: "zenticEcomSettings",
    seeded: "zenticEcomSeeded",
  };

  var GALLERY = "assets/img/gallery/";
  var PRODUCTS = "assets/img/products/";

  function uid(prefix) {
    return (
      prefix +
      "-" +
      Date.now().toString(36).slice(-5) +
      Math.floor(Math.random() * 900 + 100)
    );
  }

  function escapeHtml(str) {
    if (str === null || str === undefined) return "";
    return String(str)
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#39;");
  }

  function formatCurrency(n) {
    n = Number(n) || 0;
    return (
      "$" +
      n.toLocaleString("en-US", {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
      })
    );
  }

  function formatDate(d) {
    var date = d instanceof Date ? d : new Date(d);
    if (isNaN(date.getTime())) return d;
    return date.toLocaleDateString("en-US", {
      month: "short",
      day: "numeric",
      year: "numeric",
    });
  }

  function read(key) {
    try {
      var raw = window.localStorage.getItem(key);
      return raw ? JSON.parse(raw) : null;
    } catch (e) {
      return null;
    }
  }

  function write(key, value) {
    window.localStorage.setItem(key, JSON.stringify(value));
  }

  /* ---------- Seed data ---------- */

  function seedCategories() {
    return [
      {
        id: "cat-1",
        name: "Electronics",
        slug: "electronics",
        image: PRODUCTS + "cat-1.jpg",
        status: "Active",
        description: "Headphones, wearables, gadgets and smart devices.",
      },
      {
        id: "cat-2",
        name: "Fashion & Apparel",
        slug: "fashion-apparel",
        image: PRODUCTS + "cat-2.jpg",
        status: "Active",
        description: "Men's and women's clothing, jackets and dresses.",
      },
      {
        id: "cat-3",
        name: "Home & Living",
        slug: "home-living",
        image: PRODUCTS + "cat-3.jpg",
        status: "Active",
        description: "Decor, candles and everyday home essentials.",
      },
      {
        id: "cat-4",
        name: "Beauty & Personal Care",
        slug: "beauty-personal-care",
        image: PRODUCTS + "cat-4.jpg",
        status: "Active",
        description: "Skincare, haircare and cosmetics.",
      },
      {
        id: "cat-5",
        name: "Sports & Outdoors",
        slug: "sports-outdoors",
        image: PRODUCTS + "cat-5.jpg",
        status: "Active",
        description: "Fitness gear, yoga and outdoor equipment.",
      },
      {
        id: "cat-6",
        name: "Toys & Games",
        slug: "toys-games",
        image: PRODUCTS + "cat-6.jpg",
        status: "Draft",
        description: "Building sets, RC toys and games for kids.",
      },
    ];
  }

  function seedProducts() {
    return [
      {
        id: "prd-1",
        name: "Wireless Noise-Cancelling Headphones",
        sku: "ELE-HP-001",
        categoryId: "cat-1",
        price: 129.99,
        comparePrice: 159.99,
        cost: 72.0,
        stock: 84,
        status: "Active",
        image: PRODUCTS + "prd-1.jpg",
        description:
          "Over-ear Bluetooth 5.3 headphones with active noise cancellation and 40-hour battery life.",
        createdAt: "2025-11-02",
      },
      {
        id: "prd-2",
        name: "Smart Fitness Watch",
        sku: "ELE-SW-014",
        categoryId: "cat-1",
        price: 89.5,
        comparePrice: 109.0,
        cost: 46.0,
        stock: 42,
        status: "Active",
        image: PRODUCTS + "prd-2.jpg",
        description:
          "AMOLED fitness tracker with heart-rate, SpO2 and 14-day battery life.",
        createdAt: "2025-11-18",
      },
      {
        id: "prd-3",
        name: "Men's Classic Denim Jacket",
        sku: "FAS-DJ-102",
        categoryId: "cat-2",
        price: 59.99,
        comparePrice: 74.99,
        cost: 28.0,
        stock: 120,
        status: "Active",
        image: PRODUCTS + "prd-3.jpg",
        description:
          "Washed cotton denim jacket, regular fit, available in 4 sizes.",
        createdAt: "2025-10-21",
      },
      {
        id: "prd-10",
        name: "Women's Summer Floral Dress",
        sku: "FAS-FD-087",
        categoryId: "cat-2",
        price: 45.0,
        comparePrice: 0,
        cost: 19.5,
        stock: 0,
        status: "Out of Stock",
        image: PRODUCTS + "prd-10.jpg",
        description:
          "Lightweight floral print dress, perfect for warm weather.",
        createdAt: "2025-09-30",
      },
      {
        id: "prd-4",
        name: "Modern Ceramic Vase Set",
        sku: "HOM-VS-033",
        categoryId: "cat-3",
        price: 34.99,
        comparePrice: 42.0,
        cost: 15.0,
        stock: 65,
        status: "Active",
        image: PRODUCTS + "prd-4.jpg",
        description: "Set of 3 matte ceramic vases in neutral tones.",
        createdAt: "2025-12-01",
      },
      {
        id: "prd-5",
        name: "Scented Soy Candle Trio",
        sku: "HOM-CN-019",
        categoryId: "cat-3",
        price: 24.5,
        comparePrice: 0,
        cost: 9.0,
        stock: 200,
        status: "Active",
        image: PRODUCTS + "prd-5.jpg",
        description:
          "Hand-poured soy candles - vanilla, sandalwood and sea salt.",
        createdAt: "2025-12-10",
      },
      {
        id: "prd-6",
        name: "Organic Argan Hair Oil",
        sku: "BEA-HO-055",
        categoryId: "cat-4",
        price: 18.99,
        comparePrice: 24.99,
        cost: 6.5,
        stock: 150,
        status: "Active",
        image: PRODUCTS + "prd-6.jpg",
        description:
          "100% organic cold-pressed argan oil for hair and scalp care.",
        createdAt: "2025-11-25",
      },
      {
        id: "prd-7",
        name: "Matte Finish Lipstick Set",
        sku: "BEA-LP-071",
        categoryId: "cat-4",
        price: 27.99,
        comparePrice: 0,
        cost: 11.0,
        stock: 5,
        status: "Active",
        image: PRODUCTS + "prd-7.jpg",
        description: "Set of 6 long-wear matte lipsticks in everyday shades.",
        createdAt: "2025-12-15",
      },
      {
        id: "prd-8",
        name: "Yoga Mat Premium Non-Slip",
        sku: "SPO-YM-008",
        categoryId: "cat-5",
        price: 32.0,
        comparePrice: 38.0,
        cost: 13.0,
        stock: 90,
        status: "Active",
        image: PRODUCTS + "prd-8.jpg",
        description:
          "6mm extra-thick eco-friendly TPE yoga mat with carry strap.",
        createdAt: "2025-10-05",
      },
      {
        id: "prd-9",
        name: "Adjustable Dumbbell Set",
        sku: "SPO-DB-041",
        categoryId: "cat-5",
        price: 149.99,
        comparePrice: 0,
        cost: 88.0,
        stock: 20,
        status: "Draft",
        image: PRODUCTS + "prd-9.jpg",
        description: "5-52.5 lb adjustable dumbbell pair, space-saving design.",
        createdAt: "2026-01-04",
      },
      {
        id: "prd-10",
        name: "Wooden Building Blocks (100pc)",
        sku: "TOY-BB-026",
        categoryId: "cat-6",
        price: 22.99,
        comparePrice: 27.99,
        cost: 9.5,
        stock: 75,
        status: "Active",
        image: PRODUCTS + "prd-10.jpg",
        description:
          "Natural wood building block set, non-toxic paint, ages 3+.",
        createdAt: "2025-11-11",
      },
      {
        id: "prd-11",
        name: "Remote Control Racing Car",
        sku: "TOY-RC-063",
        categoryId: "cat-6",
        price: 39.99,
        comparePrice: 49.99,
        cost: 21.0,
        stock: 0,
        status: "Out of Stock",
        image: PRODUCTS + "prd-11.jpg",
        description:
          "1:18 scale RC car, 25km/h top speed, rechargeable battery.",
        createdAt: "2025-12-22",
      },
    ];
  }

  function seedCustomers() {
    return [
      {
        id: "cus-3001",
        name: "Olivia Bennett",
        email: "olivia.bennett@mail.com",
        phone: "+1 (415) 555-0142",
        avatarImg: "assets/img/avatar/avatar-1.png",
        joined: "2025-03-14",
        status: "Active",
        address: {
          line1: "482 Maple Street",
          line2: "Apt 3B",
          city: "San Francisco",
          state: "CA",
          zip: "94103",
          country: "United States",
        },
        billing: {
          cardBrand: "Visa",
          last4: "4242",
          expiry: "09/28",
          billingName: "Olivia Bennett",
        },
        security: { twoFactor: true, lastLogin: "2026-06-28 10:12 AM" },
        notifications: {
          orderUpdates: true,
          promotions: true,
          sms: false,
          newsletter: true,
        },
      },
      {
        id: "cus-3002",
        name: "Liam Carter",
        email: "liam.carter@mail.com",
        phone: "+1 (312) 555-0187",
        avatarImg: "assets/img/avatar/avatar-2.png",
        joined: "2025-05-02",
        status: "Active",
        address: {
          line1: "117 Oakwood Ave",
          line2: "",
          city: "Chicago",
          state: "IL",
          zip: "60601",
          country: "United States",
        },
        billing: {
          cardBrand: "Mastercard",
          last4: "8830",
          expiry: "01/27",
          billingName: "Liam Carter",
        },
        security: { twoFactor: false, lastLogin: "2026-06-25 04:47 PM" },
        notifications: {
          orderUpdates: true,
          promotions: false,
          sms: true,
          newsletter: false,
        },
      },
      {
        id: "cus-3003",
        name: "Sophia Nguyen",
        email: "sophia.nguyen@mail.com",
        phone: "+1 (206) 555-0119",
        avatarImg: "assets/img/avatar/avatar-5.png",
        joined: "2025-06-19",
        status: "Active",
        address: {
          line1: "29 Cedar Court",
          line2: "",
          city: "Seattle",
          state: "WA",
          zip: "98101",
          country: "United States",
        },
        billing: {
          cardBrand: "Visa",
          last4: "1190",
          expiry: "11/26",
          billingName: "Sophia Nguyen",
        },
        security: { twoFactor: true, lastLogin: "2026-06-30 08:03 AM" },
        notifications: {
          orderUpdates: true,
          promotions: true,
          sms: true,
          newsletter: true,
        },
      },
      {
        id: "cus-3004",
        name: "Noah Rodriguez",
        email: "noah.rodriguez@mail.com",
        phone: "+1 (713) 555-0163",
        avatarImg: "assets/img/avatar/avatar-6.png",
        joined: "2025-08-27",
        status: "Blocked",
        address: {
          line1: "8 Riverside Drive",
          line2: "",
          city: "Houston",
          state: "TX",
          zip: "77002",
          country: "United States",
        },
        billing: {
          cardBrand: "Amex",
          last4: "3005",
          expiry: "04/27",
          billingName: "Noah Rodriguez",
        },
        security: { twoFactor: false, lastLogin: "2026-05-30 02:20 PM" },
        notifications: {
          orderUpdates: false,
          promotions: false,
          sms: false,
          newsletter: false,
        },
      },
      {
        id: "cus-3005",
        name: "Ava Thompson",
        email: "ava.thompson@mail.com",
        phone: "+1 (617) 555-0176",
        avatarImg: "assets/img/avatar/avatar-3.png",
        joined: "2025-09-09",
        status: "Active",
        address: {
          line1: "56 Birchwood Lane",
          line2: "Unit 12",
          city: "Boston",
          state: "MA",
          zip: "02108",
          country: "United States",
        },
        billing: {
          cardBrand: "Visa",
          last4: "7742",
          expiry: "07/29",
          billingName: "Ava Thompson",
        },
        security: { twoFactor: true, lastLogin: "2026-06-29 11:55 AM" },
        notifications: {
          orderUpdates: true,
          promotions: true,
          sms: false,
          newsletter: true,
        },
      },
      {
        id: "cus-3006",
        name: "Ethan Walker",
        email: "ethan.walker@mail.com",
        phone: "+1 (303) 555-0154",
        avatarImg: "assets/img/avatar/avatar-4.png",
        joined: "2025-10-30",
        status: "Active",
        address: {
          line1: "310 Pine Street",
          line2: "",
          city: "Denver",
          state: "CO",
          zip: "80202",
          country: "United States",
        },
        billing: {
          cardBrand: "Mastercard",
          last4: "5561",
          expiry: "02/28",
          billingName: "Ethan Walker",
        },
        security: { twoFactor: false, lastLogin: "2026-06-20 09:31 AM" },
        notifications: {
          orderUpdates: true,
          promotions: false,
          sms: false,
          newsletter: false,
        },
      },
      {
        id: "cus-3007",
        name: "Mia Anderson",
        email: "mia.anderson@mail.com",
        phone: "+1 (480) 555-0198",
        avatarImg: "assets/img/avatar/avatar-7.png",
        joined: "2025-12-04",
        status: "Active",
        address: {
          line1: "74 Sunset Blvd",
          line2: "",
          city: "Phoenix",
          state: "AZ",
          zip: "85001",
          country: "United States",
        },
        billing: {
          cardBrand: "Visa",
          last4: "2298",
          expiry: "12/27",
          billingName: "Mia Anderson",
        },
        security: { twoFactor: true, lastLogin: "2026-06-27 06:14 PM" },
        notifications: {
          orderUpdates: true,
          promotions: true,
          sms: true,
          newsletter: false,
        },
      },
      {
        id: "cus-3008",
        name: "Lucas Martins",
        email: "lucas.martins@mail.com",
        phone: "+1 (786) 555-0125",
        avatarImg: "assets/img/avatar/avatar-8.png",
        joined: "2026-01-15",
        status: "Active",
        address: {
          line1: "410 Coral Way",
          line2: "",
          city: "Miami",
          state: "FL",
          zip: "33131",
          country: "United States",
        },
        billing: {
          cardBrand: "Discover",
          last4: "9081",
          expiry: "05/29",
          billingName: "Lucas Martins",
        },
        security: { twoFactor: false, lastLogin: "2026-06-15 01:09 PM" },
        notifications: {
          orderUpdates: true,
          promotions: false,
          sms: false,
          newsletter: true,
        },
      },
    ];
  }

  function seedOrders() {
    function item(p, qty) {
      return {
        productId: p.id,
        name: p.name,
        image: p.image,
        price: p.price,
        qty: qty,
      };
    }
    var products = seedProducts();
    function findP(id) {
      return products.filter(function (p) {
        return p.id === id;
      })[0];
    }

    var raw = [
      {
        id: "ORD-10045",
        customerId: "cus-3001",
        date: "2026-06-29",
        items: [item(findP("prd-1"), 1), item(findP("prd-6"), 2)],
        shipping: 6.99,
        tax: 12.4,
        paymentMethod: "Visa â€¢â€¢â€¢â€¢ 4242",
        paymentStatus: "Paid",
        orderStatus: "Delivered",
      },
      {
        id: "ORD-10046",
        customerId: "cus-3002",
        date: "2026-06-28",
        items: [item(findP("prd-3"), 1)],
        shipping: 4.99,
        tax: 4.8,
        paymentMethod: "Mastercard â€¢â€¢â€¢â€¢ 8830",
        paymentStatus: "Paid",
        orderStatus: "Shipped",
      },
      {
        id: "ORD-10047",
        customerId: "cus-3003",
        date: "2026-06-27",
        items: [item(findP("prd-8"), 1), item(findP("prd-5"), 1)],
        shipping: 5.5,
        tax: 4.52,
        paymentMethod: "Visa â€¢â€¢â€¢â€¢ 1190",
        paymentStatus: "Paid",
        orderStatus: "Processing",
      },
      {
        id: "ORD-10048",
        customerId: "cus-3004",
        date: "2026-06-25",
        items: [item(findP("prd-9"), 1)],
        shipping: 0,
        tax: 12.0,
        paymentMethod: "Amex â€¢â€¢â€¢â€¢ 3005",
        paymentStatus: "Refunded",
        orderStatus: "Cancelled",
      },
      {
        id: "ORD-10049",
        customerId: "cus-3005",
        date: "2026-06-24",
        items: [item(findP("prd-4"), 2)],
        shipping: 6.99,
        tax: 5.6,
        paymentMethod: "Visa â€¢â€¢â€¢â€¢ 7742",
        paymentStatus: "Paid",
        orderStatus: "Delivered",
      },
      {
        id: "ORD-10050",
        customerId: "cus-3006",
        date: "2026-06-22",
        items: [item(findP("prd-2"), 1)],
        shipping: 4.99,
        tax: 7.16,
        paymentMethod: "Mastercard â€¢â€¢â€¢â€¢ 5561",
        paymentStatus: "Pending",
        orderStatus: "Pending",
      },
      {
        id: "ORD-10051",
        customerId: "cus-3007",
        date: "2026-06-20",
        items: [item(findP("prd-7"), 1), item(findP("prd-10"), 1)],
        shipping: 5.99,
        tax: 5.84,
        paymentMethod: "Visa â€¢â€¢â€¢â€¢ 2298",
        paymentStatus: "Paid",
        orderStatus: "Shipped",
      },
      {
        id: "ORD-10052",
        customerId: "cus-3008",
        date: "2026-06-18",
        items: [item(findP("prd-10"), 3)],
        shipping: 6.5,
        tax: 5.52,
        paymentMethod: "Discover â€¢â€¢â€¢â€¢ 9081",
        paymentStatus: "Paid",
        orderStatus: "Delivered",
      },
      {
        id: "ORD-10053",
        customerId: "cus-3001",
        date: "2026-06-15",
        items: [item(findP("prd-11"), 1)],
        shipping: 4.99,
        tax: 3.2,
        paymentMethod: "Visa â€¢â€¢â€¢â€¢ 4242",
        paymentStatus: "Failed",
        orderStatus: "Pending",
      },
      {
        id: "ORD-10054",
        customerId: "cus-3003",
        date: "2026-06-10",
        items: [item(findP("prd-1"), 1), item(findP("prd-8"), 1)],
        shipping: 6.99,
        tax: 12.96,
        paymentMethod: "Visa â€¢â€¢â€¢â€¢ 1190",
        paymentStatus: "Paid",
        orderStatus: "Delivered",
      },
    ];

    var customers = seedCustomers();
    function findC(id) {
      return customers.filter(function (c) {
        return c.id === id;
      })[0];
    }

    return raw.map(function (o) {
      var subtotal = o.items.reduce(function (sum, it) {
        return sum + it.price * it.qty;
      }, 0);
      var total = subtotal + o.shipping + o.tax;
      var c = findC(o.customerId);
      return Object.assign({}, o, {
        subtotal: Math.round(subtotal * 100) / 100,
        total: Math.round(total * 100) / 100,
        customerName: c.name,
        customerEmail: c.email,
        avatarImg: c.avatarImg,
        shippingAddress: c.address,
        billingAddress: c.address,
        timeline: buildTimeline(o.orderStatus, o.date),
      });
    });
  }

  function buildTimeline(status, dateStr) {
    var order = ["Pending", "Processing", "Shipped", "Delivered"];
    var base = new Date(dateStr);
    var steps = [
      {
        status: "Order Placed",
        note: "Order was placed by customer",
        offset: 0,
      },
      {
        status: "Payment Confirmed",
        note: "Payment successfully processed",
        offset: 0,
      },
      {
        status: "Processing",
        note: "Order is being prepared for shipment",
        offset: 1,
      },
      { status: "Shipped", note: "Package handed to courier", offset: 2 },
      { status: "Delivered", note: "Package delivered to customer", offset: 4 },
    ];
    if (status === "Cancelled") {
      return [
        {
          status: "Order Placed",
          note: "Order was placed by customer",
          date: fmtOffset(base, 0),
        },
        {
          status: "Cancelled",
          note: "Order was cancelled",
          date: fmtOffset(base, 1),
        },
      ];
    }
    var reachedIndex = status === "Pending" ? 0 : order.indexOf(status) + 1;
    return steps.slice(0, Math.max(2, reachedIndex + 1)).map(function (s) {
      return {
        status: s.status,
        note: s.note,
        date: fmtOffset(base, s.offset),
      };
    });
  }

  function fmtOffset(base, days) {
    var d = new Date(base);
    d.setDate(d.getDate() + days);
    return d.toISOString().slice(0, 10);
  }

  function seedReviews() {
    var products = seedProducts();
    var customers = seedCustomers();
    function p(i) {
      return products[i];
    }
    function c(i) {
      return customers[i];
    }
    return [
      {
        id: "rev-4001",
        productId: p(0).id,
        productName: p(0).name,
        customerId: c(2).id,
        customerName: c(2).name,
        rating: 5,
        comment:
          "Sound quality is incredible and the noise cancellation actually works on flights.",
        date: "2026-06-25",
        status: "Published",
      },
      {
        id: "rev-4002",
        productId: p(2).id,
        productName: p(2).name,
        customerId: c(1).id,
        customerName: c(1).name,
        rating: 4,
        comment:
          "Great fit, though the color is slightly darker than pictured.",
        date: "2026-06-20",
        status: "Published",
      },
      {
        id: "rev-4003",
        productId: p(6).id,
        productName: p(6).name,
        customerId: c(0).id,
        customerName: c(0).name,
        rating: 5,
        comment: "My hair has never felt this soft. Repurchasing already.",
        date: "2026-06-18",
        status: "Published",
      },
      {
        id: "rev-4004",
        productId: p(9).id,
        productName: p(9).name,
        customerId: c(3).id,
        customerName: c(3).name,
        rating: 2,
        comment: "Adjustment dial feels flimsy after two weeks of use.",
        date: "2026-06-15",
        status: "Pending",
      },
      {
        id: "rev-4005",
        productId: p(4).id,
        productName: p(4).name,
        customerId: c(4).id,
        customerName: c(4).name,
        rating: 5,
        comment: "Beautiful vases, perfect size for my living room shelf.",
        date: "2026-06-12",
        status: "Published",
      },
      {
        id: "rev-4006",
        productId: p(11).id,
        productName: p(11).name,
        customerId: c(7).id,
        customerName: c(7).name,
        rating: 1,
        comment: "Arrived with a cracked shell, requesting a replacement.",
        date: "2026-06-08",
        status: "Pending",
      },
      {
        id: "rev-4007",
        productId: p(8).id,
        productName: p(8).name,
        customerId: c(5).id,
        customerName: c(5).name,
        rating: 4,
        comment: "Great grip and thickness, wish it came in more colors.",
        date: "2026-06-05",
        status: "Published",
      },
      {
        id: "rev-4008",
        productId: p(7).id,
        productName: p(7).name,
        customerId: c(6).id,
        customerName: c(6).name,
        rating: 3,
        comment: "Pigmentation is nice but dries out lips a bit.",
        date: "2026-05-30",
        status: "Rejected",
      },
    ];
  }

  function seedReferrals() {
    var customers = seedCustomers();
    function c(i) {
      return customers[i];
    }
    return [
      {
        id: "ref-5001",
        referrerId: c(0).id,
        referrerName: c(0).name,
        referredEmail: "grace.hill@mail.com",
        date: "2026-06-27",
        status: "Completed",
        orderValue: 89.5,
        reward: 8.95,
      },
      {
        id: "ref-5002",
        referrerId: c(2).id,
        referrerName: c(2).name,
        referredEmail: "ryan.cole@mail.com",
        date: "2026-06-24",
        status: "Completed",
        orderValue: 149.99,
        reward: 15.0,
      },
      {
        id: "ref-5003",
        referrerId: c(4).id,
        referrerName: c(4).name,
        referredEmail: "zoe.parker@mail.com",
        date: "2026-06-20",
        status: "Pending",
        orderValue: 0,
        reward: 0,
      },
      {
        id: "ref-5004",
        referrerId: c(0).id,
        referrerName: c(0).name,
        referredEmail: "jack.reed@mail.com",
        date: "2026-06-14",
        status: "Pending",
        orderValue: 0,
        reward: 0,
      },
      {
        id: "ref-5005",
        referrerId: c(6).id,
        referrerName: c(6).name,
        referredEmail: "chloe.brooks@mail.com",
        date: "2026-06-09",
        status: "Completed",
        orderValue: 64.99,
        reward: 6.5,
      },
      {
        id: "ref-5006",
        referrerId: c(5).id,
        referrerName: c(5).name,
        referredEmail: "mason.reid@mail.com",
        date: "2026-05-28",
        status: "Expired",
        orderValue: 0,
        reward: 0,
      },
    ];
  }

  function seedSettings() {
    return {
      store: {
        name: "Zentic Store",
        email: "support@zentic.store",
        phone: "+1 (415) 555-0100",
        currency: "USD - US Dollar",
        timezone: "UTC-08:00 Pacific",
        address: "482 Market Street, Suite 400",
        city: "San Francisco",
        state: "CA",
        zip: "94103",
        country: "United States",
        logo: "assets/img/logo.svg",
      },
      payment: {
        gateways: [
          {
            name: "Stripe",
            desc: "Credit & debit cards",
            icon: "icon-credit-card",
            enabled: true,
          },
          {
            name: "PayPal",
            desc: "PayPal balance & cards",
            icon: "icon-wallet",
            enabled: true,
          },
          {
            name: "Cash on Delivery",
            desc: "Pay when order arrives",
            icon: "icon-banknote",
            enabled: false,
          },
          {
            name: "Bank Transfer",
            desc: "Manual bank transfer",
            icon: "icon-landmark",
            enabled: false,
          },
        ],
      },
      checkout: {
        guestCheckout: true,
        termsRequired: true,
        autoInvoice: true,
        minOrderAmount: 10,
        orderNotePrompt: true,
      },
      shipping: {
        zones: [
          {
            id: "zone-1",
            name: "Domestic (US)",
            method: "Standard - 3-5 business days",
            rate: 4.99,
            freeOver: 75,
          },
          {
            id: "zone-2",
            name: "Domestic (US)",
            method: "Express - 1-2 business days",
            rate: 14.99,
            freeOver: 150,
          },
          {
            id: "zone-3",
            name: "International",
            method: "Standard - 7-14 business days",
            rate: 19.99,
            freeOver: 0,
          },
        ],
      },
      locations: [
        {
          id: "loc-1",
          name: "Main Warehouse",
          address: "482 Market Street, Suite 400, San Francisco, CA 94103",
          phone: "+1 (415) 555-0100",
          isPrimary: true,
        },
        {
          id: "loc-2",
          name: "East Coast Fulfillment",
          address: "220 Bedford Ave, Brooklyn, NY 11211",
          phone: "+1 (718) 555-0166",
          isPrimary: false,
        },
      ],
      notifications: {
        newOrder: true,
        lowStock: true,
        customerReview: true,
        refundRequest: true,
        newsletterSignup: false,
      },
    };
  }

  /* ---------- Init / seeding ---------- */

  function init() {
    if (read(LS.seeded)) return;
    write(LS.categories, seedCategories());
    write(LS.products, seedProducts());
    write(LS.customers, seedCustomers());
    write(LS.orders, seedOrders());
    write(LS.reviews, seedReviews());
    write(LS.referrals, seedReferrals());
    write(LS.settings, seedSettings());
    write(LS.seeded, true);
  }

  /* ---------- Public CRUD API ---------- */

  var EcomStore = {
    uid: uid,
    escapeHtml: escapeHtml,
    formatCurrency: formatCurrency,
    formatDate: formatDate,

    resetDemoData: function () {
      window.localStorage.removeItem(LS.seeded);
      init();
    },

    getCategories: function () {
      return read(LS.categories) || [];
    },
    getCategory: function (id) {
      return (
        this.getCategories().filter(function (c) {
          return c.id === id;
        })[0] || null
      );
    },
    saveCategory: function (category) {
      var list = this.getCategories();
      if (!category.id) {
        category.id = uid("cat");
        list.push(category);
      } else {
        list = list.map(function (c) {
          return c.id === category.id ? Object.assign({}, c, category) : c;
        });
      }
      write(LS.categories, list);
      return category;
    },
    deleteCategory: function (id) {
      write(
        LS.categories,
        this.getCategories().filter(function (c) {
          return c.id !== id;
        }),
      );
    },
    categoryProductCount: function (categoryId) {
      return this.getProducts().filter(function (p) {
        return p.categoryId === categoryId;
      }).length;
    },

    getProducts: function () {
      return read(LS.products) || [];
    },
    getProduct: function (id) {
      return (
        this.getProducts().filter(function (p) {
          return p.id === id;
        })[0] || null
      );
    },
    saveProduct: function (product) {
      var list = this.getProducts();
      if (!product.id) {
        product.id = uid("prd");
        product.createdAt = new Date().toISOString().slice(0, 10);
        list.push(product);
      } else {
        list = list.map(function (p) {
          return p.id === product.id ? Object.assign({}, p, product) : p;
        });
      }
      write(LS.products, list);
      return product;
    },
    deleteProduct: function (id) {
      write(
        LS.products,
        this.getProducts().filter(function (p) {
          return p.id !== id;
        }),
      );
    },

    getOrders: function () {
      return read(LS.orders) || [];
    },
    getOrder: function (id) {
      return (
        this.getOrders().filter(function (o) {
          return o.id === id;
        })[0] || null
      );
    },
    updateOrderStatus: function (id, status) {
      var list = this.getOrders().map(function (o) {
        if (o.id !== id) return o;
        var updated = Object.assign({}, o, { orderStatus: status });
        updated.timeline = updated.timeline.concat([
          {
            status: status,
            note: "Status updated by admin",
            date: new Date().toISOString().slice(0, 10),
          },
        ]);
        return updated;
      });
      write(LS.orders, list);
    },
    updatePaymentStatus: function (id, status) {
      write(
        LS.orders,
        this.getOrders().map(function (o) {
          return o.id === id
            ? Object.assign({}, o, { paymentStatus: status })
            : o;
        }),
      );
    },
    updateOrderItems: function (id, items) {
      var list = this.getOrders().map(function (o) {
        if (o.id !== id) return o;
        var subtotal = items.reduce(function (sum, it) {
          return sum + it.price * it.qty;
        }, 0);
        subtotal = Math.round(subtotal * 100) / 100;
        var total = Math.round((subtotal + o.shipping + o.tax) * 100) / 100;
        return Object.assign({}, o, {
          items: items,
          subtotal: subtotal,
          total: total,
        });
      });
      write(LS.orders, list);
    },
    updateOrderAddress: function (id, address) {
      write(
        LS.orders,
        this.getOrders().map(function (o) {
          return o.id === id
            ? Object.assign({}, o, { shippingAddress: address })
            : o;
        }),
      );
    },

    getCustomers: function () {
      return read(LS.customers) || [];
    },
    getCustomer: function (id) {
      return (
        this.getCustomers().filter(function (c) {
          return c.id === id;
        })[0] || null
      );
    },
    saveCustomer: function (customer) {
      write(
        LS.customers,
        this.getCustomers().map(function (c) {
          return c.id === customer.id ? Object.assign({}, c, customer) : c;
        }),
      );
    },
    customerStats: function (customerId) {
      var orders = this.getOrders().filter(function (o) {
        return o.customerId === customerId;
      });
      var totalSpent = orders.reduce(function (sum, o) {
        return sum + o.total;
      }, 0);
      return {
        ordersCount: orders.length,
        totalSpent: Math.round(totalSpent * 100) / 100,
        orders: orders,
      };
    },

    getReviews: function () {
      return read(LS.reviews) || [];
    },
    getReview: function (id) {
      return (
        this.getReviews().filter(function (r) {
          return r.id === id;
        })[0] || null
      );
    },
    updateReviewStatus: function (id, status) {
      write(
        LS.reviews,
        this.getReviews().map(function (r) {
          return r.id === id ? Object.assign({}, r, { status: status }) : r;
        }),
      );
    },
    deleteReview: function (id) {
      write(
        LS.reviews,
        this.getReviews().filter(function (r) {
          return r.id !== id;
        }),
      );
    },

    getReferrals: function () {
      return read(LS.referrals) || [];
    },
    updateReferralStatus: function (id, status) {
      write(
        LS.referrals,
        this.getReferrals().map(function (r) {
          return r.id === id ? Object.assign({}, r, { status: status }) : r;
        }),
      );
    },

    getSettings: function () {
      return read(LS.settings) || seedSettings();
    },
    saveSettingsSection: function (section, data) {
      var settings = this.getSettings();
      settings[section] = Object.assign({}, settings[section], data);
      write(LS.settings, settings);
      return settings;
    },
    saveLocation: function (location) {
      var settings = this.getSettings();
      if (!location.id) {
        location.id = uid("loc");
        settings.locations.push(location);
      } else {
        settings.locations = settings.locations.map(function (l) {
          return l.id === location.id ? Object.assign({}, l, location) : l;
        });
      }
      write(LS.settings, settings);
      return location;
    },
    deleteLocation: function (id) {
      var settings = this.getSettings();
      settings.locations = settings.locations.filter(function (l) {
        return l.id !== id;
      });
      write(LS.settings, settings);
    },
    saveShippingZone: function (zone) {
      var settings = this.getSettings();
      if (!zone.id) {
        zone.id = uid("zone");
        settings.shipping.zones.push(zone);
      } else {
        settings.shipping.zones = settings.shipping.zones.map(function (z) {
          return z.id === zone.id ? Object.assign({}, z, zone) : z;
        });
      }
      write(LS.settings, settings);
      return zone;
    },
    deleteShippingZone: function (id) {
      var settings = this.getSettings();
      settings.shipping.zones = settings.shipping.zones.filter(function (z) {
        return z.id !== id;
      });
      write(LS.settings, settings);
    },
  };

  init();
  window.EcomStore = EcomStore;
})(window);
