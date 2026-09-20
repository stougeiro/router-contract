![PHP](https://img.shields.io/badge/PHP-%20^8.2-777BB4)
![PHPStan-Level](https://img.shields.io/badge/PHPStan-Level%209-224488)
![License](https://img.shields.io/badge/License-MIT-777)

# Router Contract

Minimal, declarative and performance‑first routing contracts for PHP. Provides clean interfaces for route collections, route resolution and router matching, enabling modular and framework‑agnostic routing architectures.

## ✨ Features

- **Minimal Interfaces**  
  A small set of contracts defining only what a router must expose — nothing more.

- **Declarative Routing**  
  Encourages routing defined exclusively through organized route files, not dynamic mutation.

- **Performance‑First Design**  
  Contracts shaped to support extremely fast, deterministic routing implementations.

- **Framework‑Agnostic**  
  Works with any request handler or routing engine, without imposing a specific framework or architecture.

- **Modular Architecture**  
  Route collections can be loaded from multiple files, enabling clean separation of modules.

---

## 📦 Installation

Install via Composer:

```bash
composer require stougeiro/router-contract
```

## 🔧 Implementations

Below is a list of known implementations maintained by the community.

- `stougeiro/router`  
  Repository: https://github.com/stougeiro/router

---

## 🧠 Why?

Routing is one of the core building blocks of any HTTP application — yet most routers mix concerns such as route loading, URL generation, matching logic, request handling, and configuration.

This package takes a different approach:
- RouteCollection is the only entry point for routes.
- Router is a pure matcher.
- Route is the resolved result.

By enforcing strict separation of responsibilities, routing becomes:
- predictable
- modular
- cache‑friendly
- easy to reason about
- easy to integrate into any framework

The goal of this contract is to define that separation clearly and consistently, enabling clean and high‑performance routing implementations.

---

## 🤝 Contributions

Contributions are welcome.
Feel free to open issues or submit pull requests.

<br>

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="170"/>](https://www.buymeacoffee.com/stougeiro)