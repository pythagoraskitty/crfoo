class TestOperation {
  async run(urls, data) {
    console.log("===== run =======");
    console.log(urls);
    return 1;
  }
}

registerURLSelectionOperation("test-operation", TestOperation);
