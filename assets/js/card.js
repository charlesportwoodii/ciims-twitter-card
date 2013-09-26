var n0PT08x5ZkZ7Eb9 = {

	id : null,

	uuid : null,

	name : null,

	/**
         * Load function is the bootstrap method all cards inherit.
         * 
         * @param  string id  The unique ID of the card we want this card to manipulate
         */
        load : function(id, name) {
                // Set some variables
                this.id = id;
                this.uuid = name + "-" + this.id;
		this.name = name;

		var self = this;
		this.getUserInfo(self);
        },

	getUserInfo : function(self) {
		$.get(CiiDashboard.endPoint + "/card/callmethod/id/" + this.id + "/method/getTwitterDetails", function(data) {
			console.log(data);
			$("#" + self.name).find(".user-info").css("background", "url(" + data.profile_banner_url + "/web)");
			$("#" + self.name).find(".user-image").attr("src", data.profile_image_url_https);
			$("#" + self.name).find("span.name").text(data.name);
			$("#" + self.name).find("#followers").text(data.followers_count);
			$("#" + self.name).find("#tweets").text(data.statuses_count);
			$("#" + self.name).find("#following").text(data.friends_count);
		});
	}
};
