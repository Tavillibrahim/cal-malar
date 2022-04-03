<?php

class Product extends CI_Controller
{

    /* Sınıfın yapıcı metodu. Sınıf çağırıldığında otomatik çalışır. */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->model("category_model");
    }

    /* Kayıt formunun ekrana basılması işlemidir. */
    public function index()
    {

        $items = $this->product_model->getAll();
        $categories = $this->category_model->getAll();

        $viewData = array(
            "items" => $items,
            "categories" => $categories,
        );

        $this->load->view("product", $viewData);
    }
    public function insert()
    {

        $id = $this->input->post("id");
        $product_name = $this->input->post("product_name");
        $product_category_id = $this->input->post("product_category_id");
        $stock = $this->input->post("stock");
        $price = $this->input->post("price");
        $message = $this->input->post("message");

        $insert = $this->product_model->insert(array(
            "id" => $id,
            "product_name" => $product_name,
            "product_category_id" => $product_category_id,
            "stock" => $stock,
            "price" => $price,

        ));

        if ($insert) {
            redirect(base_url("Product/getAll"));
        } else {
            redirect(base_url("/"));
        }
    }
    public function getAll()
    {

        $items = $this->product_model->getAll();
        $categories = $this->category_model->getAll();

        $viewData = array(
            "items" => $items,
            "categories" => $categories,
        );

        $this->load->view("table", $viewData);
    }
}
