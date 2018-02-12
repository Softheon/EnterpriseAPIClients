// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Newtonsoft.Json;
    using System.Collections;
    using System.Collections.Generic;
    using System.Linq;

    /// <summary>
    /// The model that is sent in response to a GET request for Extension
    /// </summary>
    public partial class ExtensionModel
    {
        /// <summary>
        /// Initializes a new instance of the ExtensionModel class.
        /// </summary>
        public ExtensionModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the ExtensionModel class.
        /// </summary>
        /// <param name="updateAction">Gets or sets the update action. Possible
        /// values include: 'None', 'Update', 'Add', 'Remove'</param>
        /// <param name="entityID">Gets or sets the entity identifier.</param>
        /// <param name="profileID">Gets or sets the profile
        /// identifier.</param>
        /// <param name="id">Gets or sets the identifier.</param>
        /// <param name="drawerID">Gets or sets the drawer identifier.</param>
        /// <param name="type">Gets or sets the type.</param>
        /// <param name="rowNumber">Gets or sets the row number.</param>
        /// <param name="strings">Gets or sets the strings.</param>
        /// <param name="integers">Gets or sets the integers.</param>
        /// <param name="doubles">Gets or sets the doubles.</param>
        /// <param name="dates">Gets or sets the dates.</param>
        public ExtensionModel(string updateAction = default(string), int? entityID = default(int?), int? profileID = default(int?), int? id = default(int?), int? drawerID = default(int?), int? type = default(int?), int? rowNumber = default(int?), IList<string> strings = default(IList<string>), IList<int?> integers = default(IList<int?>), IList<double?> doubles = default(IList<double?>), IList<System.DateTime?> dates = default(IList<System.DateTime?>))
        {
            UpdateAction = updateAction;
            EntityID = entityID;
            ProfileID = profileID;
            ID = id;
            DrawerID = drawerID;
            Type = type;
            RowNumber = rowNumber;
            Strings = strings;
            Integers = integers;
            Doubles = doubles;
            Dates = dates;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the update action. Possible values include: 'None',
        /// 'Update', 'Add', 'Remove'
        /// </summary>
        [JsonProperty(PropertyName = "UpdateAction")]
        public string UpdateAction { get; set; }

        /// <summary>
        /// Gets or sets the entity identifier.
        /// </summary>
        [JsonProperty(PropertyName = "EntityID")]
        public int? EntityID { get; set; }

        /// <summary>
        /// Gets or sets the profile identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ProfileID")]
        public int? ProfileID { get; set; }

        /// <summary>
        /// Gets or sets the identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ID")]
        public int? ID { get; set; }

        /// <summary>
        /// Gets or sets the drawer identifier.
        /// </summary>
        [JsonProperty(PropertyName = "DrawerID")]
        public int? DrawerID { get; set; }

        /// <summary>
        /// Gets or sets the type.
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public int? Type { get; set; }

        /// <summary>
        /// Gets or sets the row number.
        /// </summary>
        [JsonProperty(PropertyName = "RowNumber")]
        public int? RowNumber { get; set; }

        /// <summary>
        /// Gets or sets the strings.
        /// </summary>
        [JsonProperty(PropertyName = "Strings")]
        public IList<string> Strings { get; set; }

        /// <summary>
        /// Gets or sets the integers.
        /// </summary>
        [JsonProperty(PropertyName = "Integers")]
        public IList<int?> Integers { get; set; }

        /// <summary>
        /// Gets or sets the doubles.
        /// </summary>
        [JsonProperty(PropertyName = "Doubles")]
        public IList<double?> Doubles { get; set; }

        /// <summary>
        /// Gets or sets the dates.
        /// </summary>
        [JsonProperty(PropertyName = "Dates")]
        public IList<System.DateTime?> Dates { get; set; }

    }
}
