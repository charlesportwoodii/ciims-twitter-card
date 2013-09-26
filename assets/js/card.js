var n0PT08x5ZkZ7Eb9 = {

	id : null,

	uuid : null,

	/**
         * Load function is the bootstrap method all cards inherit.
         * 
         * @param  string id  The unique ID of the card we want this card to manipulate
         */
        load : function(id) {
                // Set some variables
                this.id = id;
                this.uuid = "n0PT08x5ZkZ7Eb9-" + this.id;

		this.getUserInfo();
        },

	getUserInfo : function() {
		$.get(CiiDashboard.endPoint + "/card/callmethod/id/" + this.id + "/method/getTwitterDetails", function(data) {
			console.log(data);
		});
	}
};
