// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// The model that is sent in response to a GET request for Application
    /// </summary>
    public partial class ApplicationModel
    {
        /// <summary>
        /// Initializes a new instance of the ApplicationModel class.
        /// </summary>
        public ApplicationModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the ApplicationModel class.
        /// </summary>
        /// <param name="id">Gets or sets the identifier.</param>
        /// <param name="name">Gets or sets the name.</param>
        public ApplicationModel(int? id = default(int?), string name = default(string))
        {
            ID = id;
            Name = name;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ID")]
        public int? ID { get; set; }

        /// <summary>
        /// Gets or sets the name.
        /// </summary>
        [JsonProperty(PropertyName = "Name")]
        public string Name { get; set; }

    }
}